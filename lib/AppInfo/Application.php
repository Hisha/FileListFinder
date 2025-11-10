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
        // ✅ Register the UserController (for dependency injection)
        $context->registerService(UserController::class, function($c) {
            return new UserController(
                'filelistfinder',
                $c->get(\OCP\IRequest::class),
                $c->get(\OCP\ILogger::class),
                $c->get(\OCP\BackgroundJob\IJobList::class)
            );
        });

        // ✅ Tell Nextcloud to load your appinfo/routes.php file
        $context->registerRoutes(__DIR__ . '/../../appinfo/routes.php');
    }

    public function boot(IBootContext $context): void {
        // You don’t need to register jobs here anymore
    }
}
