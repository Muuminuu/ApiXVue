<?php

namespace App\DataFixtures;

use App\Entity\Asset;
use App\Entity\AssetCategory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $assetCategoryList = [];
        for ($i = 0; $i < 10; $i++) {
        // Création de l'auteur lui-même.
        $assetCategory = new AssetCategory();
        $assetCategory->setName("Name " . $i);
        $manager->persist($assetCategory);
        // On sauvegarde l'auteur créé dans un tableau.
        $assetCategoryList[] = $assetCategory;
        }

        for ($i = 0; $i < 20; $i++) {
            $asset = new Asset;
            $asset->setName('Asset ' . $i);
            $asset->setDescription('Detail de l\'Asset' . $i);
            $asset->setCategory($assetCategoryList[array_rand($assetCategoryList)]);
            $manager->persist($asset);
        }
        $manager->flush();
    }
}
