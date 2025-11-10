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


public function __construct($AppName, IRequest $request, ILogger $logger) {
parent::__construct($AppName, $request);
$this->logger = $logger;
}


public function index(): TemplateResponse {
return new TemplateResponse('filelistfinder', 'user');
}


public function submit(): TemplateResponse {
// TODO: handle file or textarea input, enqueue background job
$this->logger->info("[FileListFinder] Job submitted by user");
return new TemplateResponse('filelistfinder', 'user', [
'status' => 'Submitted!'
]);
}
}
