<!DOCTYPE html>
<html>
<head>
  <title>HomeMatch - Find Your Dream Home</title>
  <!-- CSS, JavaScript, etc. -->
</head>
<body>
  <header>
    <h1>Welcome to HomeMatch!</h1>
    <!-- Navigation bar, logo, etc. -->
  </header>

  <nav>
    <!-- Links to different sections of the website -->
  </nav>

  <main>
    <section>
      <!-- Loop through the properties and display them -->
      <?php foreach ($properties as $property): ?>
        <article>
          <h2><?=htmlspecialchars($property['title'])?></h2>
          <p><?=htmlspecialchars($property['description'])?></p>
          <!-- Display other property details here -->
        </article>
      <?php endforeach; ?>
    </section>
    
    <aside>
      <!-- Side content, such as related links, ads, etc. -->
    </aside>
  </main>

  <footer>
    <!-- Copyright information, additional links, etc. -->
  </footer>
</body>
</html>
