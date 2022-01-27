<?php
/**
 * @see \App\Config\RoutesConfig
 */
declare(strict_types=1);


return [
    'home' => [
        'controller' => \App\Ports\Http\Controllers\HomeController::class,
        'action' => 'actionIndex',
        'route' => '/'
    ]
];
