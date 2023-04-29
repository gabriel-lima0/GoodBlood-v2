<?php

require_once 'core/router.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/api/v1/login';

route($method, $path);
