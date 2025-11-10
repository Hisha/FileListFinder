<?php
namespace OCA\FileListFinder\AppInfo;

use OCP\AppFramework\App;
use OCP\BackgroundJob\IJobList;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCA\FileListFinder\Controller\UserController;
use OCA\FileListFinder\BackgroundJob\FileListProcessor;

class Application extends App implements IBootstrap {

    public function __construct(array $urlParams = []) {
        parent::__construct('filelistfinder', $urlParams);
    }

    public function register(IRegistrationContext $context): void {
    // Register controller service for dependency injection
    $context->registerService(UserController::class, function($c) {
        return new UserController(
            'filelistfinder',
            $c->get(\OCP\IRequest::class),
            $c->get(\OCP\ILogger::class),
            $c->get(\OCP\BackgroundJob\IJobList::class)
        );
    });
}

    public function boot(IBootContext $context): void {
        $logger->info('[FileListFinder] App booted');
    }
}
