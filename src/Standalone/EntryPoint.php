<?php

namespace BackBeePlanet\Standalone;

use BackBee\Bundle\AbstractBundle;
use BackBee\Event\Event;

/**
 * Class EntryPoint
 *
 * @package BackBeePlanet\Standalone
 *
 * @author Eric Chau <eric.chau@lp-digital.fr>
 */
class EntryPoint extends AbstractBundle
{
    /**
     * Called on "bbapplication.init" event to add standalone resources folders.
     *
     * @param Event $event
     */
    public static function onApplicationInit(Event $event)
    {
        $app = $event->getTarget();
        if ($app->isRestored()) {
            return;
        }

        $app->getRenderer()->addLayoutDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'layouts');
        $app->getRenderer()->addScriptDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'templates');
        $app->unshiftClassContentDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'classcontents');
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function stop()
    {
        return $this;
    }
}
