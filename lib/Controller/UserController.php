<?php
namespace OCA\FileListFinder\Controller;


use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\ILogger;
use OCP\IRequest;
use OCP\BackgroundJob\IJobList;
use OCA\FileListFinder\BackgroundJob\FileListProcessor;


class UserController extends Controller {
private ILogger $logger;
private IJobList $jobList;

public function __construct($AppName, IRequest $request, ILogger $logger, IJobList $jobList) {
    parent::__construct($AppName, $request);
    $this->logger = $logger;
    $this->jobList = $jobList;
}


public function index(): TemplateResponse {
return new TemplateResponse('filelistfinder', 'user');
}


public function submit(): TemplateResponse {
    $this->logger->info("[FileListFinder] Job submitted by user");

    // Enqueue the background job with optional arguments
    $this->jobList->add(FileListProcessor::class, [
        'requested_at' => time(),
        'requested_by' => $this->request->getServer()['REMOTE_USER'] ?? 'unknown'
    ]);

    $this->logger->info("[FileListFinder] Job successfully queued");

    return new TemplateResponse('filelistfinder', 'user', [
        'status' => 'Submitted and job queued!'
    ]);
}
