<?php
/**
 * Yii2 Pages Module
 *
 * @link      https://github.com/hiqdev/yii2-wordpress-pages
 * @package   yii2-wordpress-pages
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'modules' => [
        'articles' => [
            'class' => \hiqdev\yii2\wordpress\pages\Module::class,
            'pageSize' => 5,
            'storage' => [
                'class' => \hiqdev\yii2\wordpress\pages\storage\WordPressApi::class,
                'url' => $params['wordpress.url'],
            ],
        ],
    ],
    'components' => [
        'themeManager' => [
            'pathMap' => [
                dirname(__DIR__) . '/src/widgets/views' => '$themedWidgetPaths',
                dirname(__DIR__) . '/src/views' => '$themedViewPaths',
            ],
        ],
        'urlManager' => [
            'rules' => [
                'articles' => 'articles/render/list',
                'articles/list' => 'articles/render/list',
                'articles/list/<name:.*>' => 'articles/render/list',
                'articles/<page:.*>' => 'articles/render/index',
            ],
        ],
    ],
];
