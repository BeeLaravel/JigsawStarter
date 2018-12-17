<?php

return [
    'baseUrl' => '',
    'production' => false,

    'title' => '博客 BeeSoft.ink',
    'keywords' => 'PHP,Laravel,Python,Flask,Js,Vue,Go',
    'description' => 'BeeSoft 的个人博客，BeeSoft 的成长笔记 - BeeSoft.ink',

    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },

    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'author' => 'BeeSoft',
        ],
    ],
    'people' => [
        'path' => [
            'web' => 'people/{number}/{filename}',
            'api' => 'people/api/{number}/{filename}',
        ],
        'api' => function ($page) {
            return [
                'slug' => str_slug($page->getFilename()),
                'name' => $page->name,
                'number' => $page->number,
                'content' => $page->getContent(),
            ];
        },
    ],
];
