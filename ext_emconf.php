<?php

/**
 * Extension Manager/Repository config file for ext "bootstrapslider".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrapslider',
    'description' => 'Bootstrapslider',
    'category' => 'templates',
    'constraints' => [
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TeamDigital\\Bootstrapslider\\' => 'Classes',
        ],
    ],
    'state' => 'experimental',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tim Büschken',
    'author_email' => 'bueschken@team-digital.de',
    'author_company' => 'team digital GmbH',
    'version' => '2.0.0',
];
