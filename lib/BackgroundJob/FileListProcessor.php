<?php
namespace OCA\FileListFinder\BackgroundJob;


use OCP\BackgroundJob\TimedJob;
use OCP\ILogger;


class FileListProcessor extends TimedJob {
protected function run($argument): void {
/** @var ILogger $logger */
$logger = \OC::$server->getLogger();
$logger->info("[FileListFinder] Background job triggered");
// TODO: implement file search + zip logic
}
}
