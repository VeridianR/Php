<?php
namespace HomeMatch\Controller;

class UserController {
  public function register() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Process the registration form
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Add user to the database
      $db = new Database();
      $db->addUser($username, $password);

      // Redirect to the login page
      header('Location: /login.php');
    } else {
      // Display the registration form
      require '../src/Views/register.php';
    }

  public function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Process the login form
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Validate user credentials
      $db = new Database();
      if ($db->validateUser($username, $password)) {
        // Start the session and set the user ID
        session_start();
        $_SESSION['user_id'] = $db->getUserId($username);
        
        // Redirect to the home page
        header('Location: /index.php');
      } else {
        // Authentication failed, show an error
        $error = "Invalid username or password.";
        require '../src/Views/login.php';
      }
    } else {
      // Display the login form
      require '../src/Views/login.php';
    }
  }
}

  }

