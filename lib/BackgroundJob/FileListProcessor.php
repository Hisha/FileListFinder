use OCP\BackgroundJob\Job;
use OCP\ILogger;

class FileListProcessor extends Job {
    protected function run($argument): void {
        $logger = \OC::$server->getLogger();
        $logger->info('[FileListFinder] Queued job triggered with argument: ' . json_encode($argument));
    }
}
