<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_api_asset_categories' => [[], ['_controller' => 'App\\Controller\\AssetCategoryController::getAssetCategoryList'], [], [['text', '/api/assetcategories']], [], [], []],
    'app_api_asset_categories_detail' => [['id'], ['_controller' => 'App\\Controller\\AssetCategoryController::getAssetCategoryDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assetcategories']], [], [], []],
    'app_api_asset_categories_delete' => [['id'], ['_controller' => 'App\\Controller\\AssetCategoryController::deleteAssetCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assetcategories']], [], [], []],
    'app_api_asset_categories_create' => [[], ['_controller' => 'App\\Controller\\AssetCategoryController::createAssetCategory'], [], [['text', '/api/assetcategories']], [], [], []],
    'app_api_asset_categories_update' => [['id'], ['_controller' => 'App\\Controller\\AssetCategoryController::updateAssetCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assetcategories']], [], [], []],
    'app_api_asset' => [[], ['_controller' => 'App\\Controller\\AssetController::getAssetList'], [], [['text', '/api/assets']], [], [], []],
    'app_api_asset_detail' => [['id'], ['_controller' => 'App\\Controller\\AssetController::getAssetDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assets']], [], [], []],
    'app_api_asset_delete' => [['id'], ['_controller' => 'App\\Controller\\AssetController::deleteAsset'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assets']], [], [], []],
    'app_api_asset_create' => [[], ['_controller' => 'App\\Controller\\AssetController::createAsset'], [], [['text', '/api/assets']], [], [], []],
    'app_api_asset_update' => [['id'], ['_controller' => 'App\\Controller\\AssetController::updateAsset'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assets']], [], [], []],
    'App\Controller\AssetCategoryController::getAssetCategoryList' => [[], ['_controller' => 'App\\Controller\\AssetCategoryController::getAssetCategoryList'], [], [['text', '/api/assetcategories']], [], [], []],
    'App\Controller\AssetCategoryController::getAssetCategoryDetail' => [['id'], ['_controller' => 'App\\Controller\\AssetCategoryController::getAssetCategoryDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assetcategories']], [], [], []],
    'App\Controller\AssetCategoryController::deleteAssetCategory' => [['id'], ['_controller' => 'App\\Controller\\AssetCategoryController::deleteAssetCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assetcategories']], [], [], []],
    'App\Controller\AssetCategoryController::createAssetCategory' => [[], ['_controller' => 'App\\Controller\\AssetCategoryController::createAssetCategory'], [], [['text', '/api/assetcategories']], [], [], []],
    'App\Controller\AssetCategoryController::updateAssetCategory' => [['id'], ['_controller' => 'App\\Controller\\AssetCategoryController::updateAssetCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assetcategories']], [], [], []],
    'App\Controller\AssetController::getAssetList' => [[], ['_controller' => 'App\\Controller\\AssetController::getAssetList'], [], [['text', '/api/assets']], [], [], []],
    'App\Controller\AssetController::getAssetDetail' => [['id'], ['_controller' => 'App\\Controller\\AssetController::getAssetDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assets']], [], [], []],
    'App\Controller\AssetController::deleteAsset' => [['id'], ['_controller' => 'App\\Controller\\AssetController::deleteAsset'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assets']], [], [], []],
    'App\Controller\AssetController::createAsset' => [[], ['_controller' => 'App\\Controller\\AssetController::createAsset'], [], [['text', '/api/assets']], [], [], []],
    'App\Controller\AssetController::updateAsset' => [['id'], ['_controller' => 'App\\Controller\\AssetController::updateAsset'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/assets']], [], [], []],
];
