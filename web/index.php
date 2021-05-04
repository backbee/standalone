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

if (!is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
    echo('<p>BackBee could not find composer autoloader. Did you install and run "composer install --no-dev" command?</p>');
    throw new \LogicException('Could not find autoload.php in vendor/. Did you run "composer install --no-dev"?');
}

require_once $autoloadFile;

use BackBeeCloud\Listener\WorkInProgressException;
use BackBeePlanet\Standalone\Application;
use BackBeePlanet\Standalone\StandaloneHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Application::setRepositoryDir(StandaloneHelper::repositoryDir());

$app = new Application();

if ($response = StandaloneHelper::getCachedResponse($app, Request::createFromGlobals())) {
    $response->send();

    exit(0);
}

try {
    $app->start();
} catch (WorkInProgressException $exception) {
    $app->getLogging()->error(
        sprintf(
            '%s : %s : %s',
            __CLASS__,
            __FUNCTION__,
            $exception->getMessage()
        )
    );
    $response = new Response($app->getRenderer()->partial('common/site_work_in_progress.html.twig'));
    $response->send();
}