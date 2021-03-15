<?php

namespace BackBeePlanet\Standalone;

use function dirname;

/**
 * Class StandaloneHelper
 *
 * @package BackBeePlanet\Standalone
 *
 * @author Eric Chau <eric.chau@lp-digital.fr>
 */
class StandaloneHelper extends AbstractStandaloneHelper
{
    /**
     * {@inheritdoc}
     */
    public static function rootDir()
    {
        return dirname(__DIR__, 2) . '/';
    }
}
