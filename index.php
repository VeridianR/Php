<?php
require_once '../vendor/autoload.php';

use HomeMatch\Controller\HomeController;

$controller = new HomeController();
$controller->index();
