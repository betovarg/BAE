<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav/user/config/site.yaml',
    'modified' => 1509761383,
    'data' => [
        'title' => 'BAE',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
