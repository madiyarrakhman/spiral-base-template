<?php

/**
 * This file is part of Spiral package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Bootloader;

use App\Config\RoutesConfig;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Router\Route;
use Spiral\Router\RouterInterface;
use Spiral\Router\Target\Action;

class RoutesBootloader extends Bootloader
{
    /**
     * Bootloader execute method.
     *
     * @param RouterInterface $router
     */
    public function boot(RouterInterface $router, RoutesConfig $config): void
    {
        foreach ($config->getRoutes() as $name => $route) {
            $newRoute = new Route($route['route'], new Action($route['controller'], $route['action']));
            if (isset($route['verbs'])) {
                $newRoute = $newRoute->withVerbs('OPTIONS', $route['verbs']);
            }
            if (isset($route['middleware'])) {
                $newRoute = $newRoute->withMiddleware($route['middleware']);
            }
            $router->setRoute(
                $name,
                $newRoute
            );
        }
    }
}
