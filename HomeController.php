<?php
namespace HomeMatch\Controller;

class HomeController {
  public function index() {
    // Get the properties from the database
    $db = new Database();
    $properties = $db->getProperties();

    // Pass the properties to the view
    require '../src/Views/home.php';
  }
}
