<?php
require_once '../vendor/autoload.php';

use HomeMatch\Controller\UserController;

$controller = new UserController();
$controller->register();
