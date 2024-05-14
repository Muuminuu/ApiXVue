<?php

namespace App\Controller;

use App\Entity\Asset;
use App\Entity\AssetCategory;
use App\Repository\AssetRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AssetCategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class AssetController extends AbstractController
{
    #[Route('/api/assets', name: 'app_api_asset', methods: ['GET'])]
    public function getAssetList(
        AssetRepository $assetRepository,
        SerializerInterface $serializer
        ): JsonResponse 
    {
        $assetList = $assetRepository->findAll();
        $jsonAssetList = $serializer->serialize($assetList, 'json');

        return new JsonResponse($jsonAssetList, Response::HTTP_OK, [], true);
    }

    #[Route('/api/assets/{id}', name: 'app_api_asset_detail', methods: ['GET'])]
    public function getAssetDetail(
        AssetRepository $assetRepository,
        SerializerInterface $serializer,
        int $id
        ): JsonResponse
    {
        $asset = $assetRepository->find($id);
        if ($asset)
        {
            $jsonAsset = $serializer->serialize($asset, 'json');
            return new JsonResponse($jsonAsset, Response::HTTP_OK, [], true);
        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }

    #[Route('/api/assets/{id}', name: 'app_api_asset_delete', methods: ['DELETE'])]
    public function deleteAsset(
        Asset $asset,
        EntityManagerInterface $em
    ) : JsonResponse
    {
        $em->remove($asset);
        $em->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/api/assets', name: 'app_api_asset_create', methods: ['POST'])]
    public function createAsset(
        Request $request,
        SerializerInterface $serializer,
        EntityManagerInterface $em,
        UrlGeneratorInterface $urlGenerator,
        AssetCategoryRepository $assetCategoryRepository
    ) : JsonResponse
    {
        $asset = $serializer->deserialize($request->getContent(), Asset::class, 'json');

        $content = $request->toArray();
        $idAssetCategory = $content['idAssetCategory'] ?? -1;

        $asset->setCategory($assetCategoryRepository->find($idAssetCategory));

        $em->persist($asset);
        $em->flush();

        $jsonAsset = $serializer->serialize($asset, 'json');
        
        $location = $urlGenerator->generate('app_api_asset_detail', ['id' => $asset->getId()], UrlGeneratorInterface::ABSOLUTE_URL);	

        return new JsonResponse($jsonAsset, Response::HTTP_CREATED, ['Location' => $location], true);
    }

    #[Route('/api/assets/{id}', name: 'app_api_asset_update', methods: ['PUT'])]
    public function updateAsset(
        
        Asset $currentAsset,
        Request $request,
        SerializerInterface $serializer,
        EntityManagerInterface $em,
        AssetCategoryRepository $assetCategoryRepository
    ) : JsonResponse
    {
        $updateAsset = $serializer->deserialize($request->getContent(), Asset::class, 'json', [
            AbstractNormalizer::OBJECT_TO_POPULATE => $currentAsset
        ]);

        $content = $request->toArray();
        $idAssetCategory = $content['idAssetCategory'] ?? -1;
        $updateAsset->setCategory($assetCategoryRepository->find($idAssetCategory));

        $em->persist($updateAsset);
        $em->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}
