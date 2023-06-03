<!DOCTYPE html>
<html>
<head>
  <title><?=$property['title']?> - HomeMatch</title>
  <!-- CSS, JavaScript, etc. -->
</head>
<body>
  <header>
    <h1><?=$property['title']?></h1>
    <!-- Navigation bar, logo, etc. -->
  </header>

  <main>
    <p>Price: <?=$property['price']?></p>
    <p>Description: <?=htmlspecialchars($property['description'])?></p>
    <!-- More property details... -->
  </main>

  <footer>
    <!-- Copyright information, additional links, etc. -->
  </footer>
</body>
</html>
