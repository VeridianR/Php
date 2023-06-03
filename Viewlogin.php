<!DOCTYPE html>
<html>
<head>
  <title>Login - HomeMatch</title>
  <!-- CSS, JavaScript, etc. -->
</head>
<body>
  <header>
    <h1>Login</h1>
    <!-- Navigation bar, logo, etc. -->
  </header>

  <main>
    <?php if (isset($error)): ?>
      <p><?=htmlspecialchars($error)?></p>
    <?php endif; ?>

    <form action="/login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </main>

  <footer>
    <!-- Copyright information, additional links, etc. -->
  </footer>
</body>
</html>
