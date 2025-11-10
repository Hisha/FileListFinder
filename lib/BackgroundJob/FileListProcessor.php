<?php
namespace OCA\FileListFinder\BackgroundJob;

use OCP\BackgroundJob\TimedJob;
use OCP\ILogger;

class FileListProcessor extends TimedJob {
    public function __construct() {
        // Run at most once every 10 minutes
        $this->setInterval(600); // 600 seconds = 10 minutes
    }

    protected function run($argument): void {
        /** @var ILogger $logger */
        $logger = \OC::$server->getLogger();
        $logger->info("[FileListFinder] Background job triggered with argument: " . json_encode($argument));
    }
}
