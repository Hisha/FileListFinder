<?php
return [
'routes' => [
['name' => 'UserController#index', 'url' => '/user', 'verb' => 'GET'],
['name' => 'UserController#submit', 'url' => '/user/submit', 'verb' => 'POST'],
['name' => 'AdminController#settings', 'url' => '/admin', 'verb' => 'GET'],
]
];
