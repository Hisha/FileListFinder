// ========================
// appinfo/app.php
// ========================


<?php
namespace OCA\FileListFinder;


use OCP\AppFramework\App;
use OCP\BackgroundJob\IJobList;
use OCA\FileListFinder\BackgroundJob\FileListProcessor;


$app = new App('filelistfinder');
/** @var IJobList $jobList */
$jobList = $app->getContainer()->get(IJobList::class);
$jobList->add(FileListProcessor::class);
