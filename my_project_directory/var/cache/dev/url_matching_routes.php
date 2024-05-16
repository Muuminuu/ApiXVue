<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/assetcategories' => [
            [['_route' => 'app_api_asset_categories', '_controller' => 'App\\Controller\\AssetCategoryController::getAssetCategoryList'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_asset_categories_create', '_controller' => 'App\\Controller\\AssetCategoryController::createAssetCategory'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/assets' => [
            [['_route' => 'app_api_asset', '_controller' => 'App\\Controller\\AssetController::getAssetList'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_asset_create', '_controller' => 'App\\Controller\\AssetController::createAsset'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/asset(?'
                    .'|categories/([^/]++)(?'
                        .'|(*:77)'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:98)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [
            [['_route' => 'app_api_asset_categories_detail', '_controller' => 'App\\Controller\\AssetCategoryController::getAssetCategoryDetail'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_asset_categories_delete', '_controller' => 'App\\Controller\\AssetCategoryController::deleteAssetCategory'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_api_asset_categories_update', '_controller' => 'App\\Controller\\AssetCategoryController::updateAssetCategory'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        98 => [
            [['_route' => 'app_api_asset_detail', '_controller' => 'App\\Controller\\AssetController::getAssetDetail'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_asset_delete', '_controller' => 'App\\Controller\\AssetController::deleteAsset'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_api_asset_update', '_controller' => 'App\\Controller\\AssetController::updateAsset'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
