<?php

namespace BackBeePlanet\Standalone;

use function dirname;

/**
 * Class Application
 *
 * @package BackBeePlanet\Standalone
 *
 * @author Eric Chau <eric.chau@lp-digital.fr>
 */
class Application extends AbstractApplication
{
    /**
     * Get base directory.
     *
     * @return string
     */
    protected function getBaseDirectory()
    {
        return dirname(__DIR__, 2) . '/';
    }
}
