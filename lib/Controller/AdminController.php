<?php
namespace OCA\FileListFinder\Controller;


use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;


class AdminController extends Controller {
public function __construct($AppName, IRequest $request) {
parent::__construct($AppName, $request);
}


public function settings(): TemplateResponse {
return new TemplateResponse('filelistfinder', 'admin');
}
}
