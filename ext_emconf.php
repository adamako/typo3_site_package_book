<?php

/**
 * Extension Manager/Repository config file for ext "book".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Book',
    'description' => 'typo3 book extension development',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Kotech\\Book\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Adama KO',
    'author_email' => 'adamako34@hotmail.com',
    'author_company' => 'Kotech',
    'version' => '1.0.0',
];
