<?php
namespace OCA\FileListFinder\AppInfo;

use OCP\AppFramework\App;
use OCP\BackgroundJob\IJobList;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCA\FileListFinder\BackgroundJob\FileListProcessor;

class Application extends App implements IBootstrap {

    public function __construct(array $urlParams = []) {
        parent::__construct('filelistfinder', $urlParams);
    }

    public function register(IRegistrationContext $context): void {
        // Future: register services, event listeners
    }

    public function boot(IBootContext $context): void {
        $jobList = $context->getAppContainer()->get(IJobList::class);
    }
}
