<?php

require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
print_r($uri);
if ((isset($uri[4]) && $uri[4] != 'user') || !isset($uri[3])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

require PROJECT_ROOT_PATH . "/controller/api/UserController.php";
$objFeedController = new UserController();
$strMethodName = $uri[6] . 'Action';
$objFeedController->{$strMethodName}();
?>