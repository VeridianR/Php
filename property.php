<?php
require_once '../vendor/autoload.php';

use HomeMatch\Controller\PropertyController;

$controller = new PropertyController();
$controller->view();
