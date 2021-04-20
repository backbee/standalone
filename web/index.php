<?php

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