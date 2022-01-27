<?php
/**
 * {project-name}
 *
 * @author {author-name}
 */
declare(strict_types=1);

namespace App\Config;

use Spiral\Core\InjectableConfig;

class RoutesConfig extends InjectableConfig
{
    public const CONFIG = 'routes';

    /**
     * @internal For internal usage. Will be hydrated in the constructor.
     */
    protected $config = [];

    public function getRoutes()
    {
        return $this->config;
    }
}
