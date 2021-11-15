<?php

/*
 * Copyright (c) 2011-2021 Lp Digital
 *
 * This file is part of BackBee Standalone.
 *
 * BackBee is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with BackBee Standalone. If not, see <https://www.gnu.org/licenses/>.
 */

namespace App\EventListener;

use BackBee\Event\Event;

/**
 * Class AppListener
 *
 * @package App\EventListener
 */
class AppListener
{
    /**
     * On application init.
     *
     * @param Event $event
     */
    public static function onApplicationInit(Event $event)
    {
        $app = $event->getTarget();

        if ($app->isRestored()) {
            return;
        }

        $app->getRenderer()->addHelperDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'helpers');
        $app->getRenderer()->addLayoutDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'layouts');
        $app->getRenderer()->addScriptDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'templates');
        $app->unshiftClassContentDir($app->getBaseDir() . DIRECTORY_SEPARATOR . 'classcontents');
    }
}
