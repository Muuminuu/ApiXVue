<?php

namespace App\Controller;

use App\Entity\AssetCategory;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AssetCategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AssetCategoryController extends AbstractController
{
    #[Route('/api/assetcategories', name: 'app_api_asset_categories', methods: ['GET'])]
    public function getAssetCategoryList(
        assetCategoryRepository $assetCategoryRepository,
        SerializerInterface $serializer
        ): JsonResponse 
    {
        $assetList = $assetCategoryRepository->findAll();
        $jsonAssetList = $serializer->serialize($assetList, 'json');

        return new JsonResponse($jsonAssetList, Response::HTTP_OK, [], true);
    }

    #[Route('/api/assetcategories/{id}', name: 'app_api_asset_categories_detail', methods: ['GET'])]
    public function getAssetCategoryDetail(
        assetCategoryRepository $assetCategoryRepository,
        SerializerInterface $serializer,
        int $id
        ): JsonResponse
    {
        $asset = $assetCategoryRepository->find($id);
        if ($asset)
        {
            $jsonAsset = $serializer->serialize($asset, 'json');
            return new JsonResponse($jsonAsset, Response::HTTP_OK, [], true);
        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }

    #[Route('/api/assetcategories/{id}', name: 'app_api_asset_categories_delete', methods: ['DELETE'])]
    public function deleteAssetCategory(
        AssetCategory $assetCategory,
        EntityManagerInterface $em
    ) : JsonResponse
    {
        $em->remove($assetCategory);
        $em->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/api/assetcategories', name: 'app_api_asset_categories_create', methods: ['POST'])]
    public function createAssetCategory(
        Request $request,
        EntityManagerInterface $em,
        SerializerInterface $serializer,
        UrlGeneratorInterface $urlGenerator
    ): JsonResponse
    {
        $assetCategory = $serializer->deserialize($request->getContent(), AssetCategory::class, 'json');
        $em->persist($assetCategory);
        $em->flush();

        $jsonAssetCategory = $serializer->serialize($assetCategory, 'json');
        $location = $urlGenerator->generate('app_api_asset_categories_detail', ['id' => $assetCategory->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

        return new JsonResponse($jsonAssetCategory, Response::HTTP_CREATED, ['Location' => $location]);
    }

    #[Route('/api/assetcategories/{id}', name: 'app_api_asset_categories_update', methods: ['PUT'])]
    public function updateAssetCategory(
        Request $request,
        EntityManagerInterface $em,
        SerializerInterface $serializer,
        AssetCategory $currentAssetCategory
    )
    {
        $updateAssetCategory = $serializer->deserialize($request->getContent(), AssetCategory::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $currentAssetCategory]);

        $em->persist($updateAssetCategory);
        $em->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}
