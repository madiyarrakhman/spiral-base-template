<?php

use \Spiral\Scaffolder\Declaration;

return [
    'declarations' => [
        'controller' => [
            'namespace' => 'Ports\Http\Controllers',
            'postfix'   => 'Controller',
            'class'     => Declaration\ControllerDeclaration::class,
        ],
        'entity'     => [
            'namespace' => 'Domain\Databases\Orm\Entity',
            'postfix'   => '',
            'options'   => [
                'annotated' => Declaration\Database\Entity\AnnotatedDeclaration::class,
            ],
        ],
        'migration'  => [
            'namespace' => 'Domain\Databases\Orm\Entity\Migrations',
            'postfix'   => 'Migration',
            'class'     => Declaration\MigrationDeclaration::class,
        ],
        'filter' => [
            'namespace' => 'Ports\Http\Filters',
            'postfix' => 'Filter',
            'class'     => Declaration\FilterDeclaration::class,
            'options'   => [
                //Set of default filters and validate rules for various types
                'mapping' => [
                    'int'     => [
                        'source'    => 'data',
                        'setter'    => 'intval',
                        'validates' => ['notEmpty', 'integer'],
                    ],
                    'integer' => [
                        'source'    => 'data',
                        'setter'    => 'intval',
                        'validates' => ['notEmpty', 'integer'],
                    ],
                    'float'   => [
                        'source'    => 'data',
                        'setter'    => 'floatval',
                        'validates' => ['notEmpty', 'float'],
                    ],
                    'double'  => [
                        'source'    => 'data',
                        'setter'    => 'floatval',
                        'validates' => ['notEmpty', 'float'],
                    ],
                    'string'  => [
                        'source'    => 'data',
                        'setter'    => 'strval',
                        'validates' => ['notEmpty', 'string'],
                    ],
                    'bool'    => [
                        'source'    => 'data',
                        'setter'    => 'boolval',
                        'validates' => ['notEmpty', 'boolean'],
                    ],
                    'boolean' => [
                        'source'    => 'data',
                        'setter'    => 'boolval',
                        'validates' => ['notEmpty', 'boolean'],
                    ],
                    'email'   => [
                        'source'    => 'data',
                        'setter'    => 'strval',
                        'validates' => ['notEmpty', 'string', 'email'],
                    ],
                    'file'    => [
                        'source'    => 'file',
                        'validates' => ['file::uploaded'],
                    ],
                    'image'   => [
                        'source'    => 'file',
                        'validates' => ['image::uploaded', 'image::valid'],
                    ],
                    null      => [
                        'source'    => 'data',
                        'setter'    => 'strval',
                        'validates' => ['notEmpty', 'string'],
                    ],
                ],
            ],
        ]
    ],
];
