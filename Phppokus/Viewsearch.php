<!DOCTYPE html>
<html>
<head>
  <title>Search - HomeMatch</title>
  <!-- CSS, JavaScript, etc. -->
</head>
<body>
  <header>
    <h1>Search</h1>
    <!-- Navigation bar, logo, etc. -->
  </header>

  <main>
    <form action="/search.php" method="get">
      <input type="text" id="query" name="query" required>
      <button type="submit">Search</button>
    </form>

    <?php foreach ($properties as $property): ?>
      <h2><?=$property['title']?></h2>
      <p>Price: <?=$property['price']?></p>
      <p>Description: <?=htmlspecialchars($property['description'])?></p>
      <!-- More property details... -->
    <?php endforeach; ?>
  </main>

  <footer>
    <!-- Copyright information, additional links, etc. -->
  </footer>
</body>
</html>
