<?php
namespace HomeMatch\Controller;

class PropertyController {
  public function view() {
    if (!isset($_GET['id'])) {
      // Property ID is missing, show an error
      $error = "Missing property ID.";
      require '../src/Views/error.php';
    } else {
      $db = new Database();
      $property = $db->getProperty($_GET['id']);

      if ($property) {
        // Display the property details
        require '../src/Views/property.php';
      } else {
        // Property not found, show an error
        $error = "Property not found.";
        require '../src/Views/error.php';
      }
    }
  }
 
  public function search() {
    $db = new Database();
    $properties = $db->searchProperties($_GET['query']);

    require '../src/Views/search.php';
  }
}


