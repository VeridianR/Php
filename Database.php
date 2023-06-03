<?php
namespace HomeMatch\Model;

class Database {
  private $pdo;

  public function __construct() {
    $this->pdo = new PDO('mysql:host=localhost;dbname=homematch', 'username', 'password');
  }

  public function getProperties() {
    $statement = $this->pdo->prepare("SELECT * FROM properties");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function searchProperties($query) {
    $statement = $this->pdo->prepare(
      "SELECT * FROM properties WHERE title LIKE ? OR description LIKE ?"
    );
    $statement->execute(["%$query%", "%$query%"]);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }




  public function validateUser($username, $password) {
    // Check if the user exists and the password is correct
    $statement = $this->pdo->prepare("SELECT password FROM users WHERE username = ?");
    $statement->execute([$username]);

    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      return password_verify($password, $row['password']);
    } else {
      return false;
    }
  }

  public function getUserId($username) {
    $statement = $this->pdo->prepare("SELECT id FROM users WHERE username = ?");
    $statement->execute([$username]);

    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      return $row['id'];
    } else {
      return null;
    }
  }
}


  public function getProperty($id) {
    $statement = $this->pdo->prepare("SELECT * FROM properties WHERE id = ?");
    $statement->execute([$id]);

    return $statement->fetch(PDO::FETCH_ASSOC);
  }

