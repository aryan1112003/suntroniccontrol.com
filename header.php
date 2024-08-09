<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-brand">
      <div class="header">
  <div class="navbar-brand">
    <div class="logo-container">
      <img src="images/logo.png" alt="Logo">
      <div class="slide-rectangle"></div>
    </div>
  </div>
</div>      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="search-bar">
          <input type="search" placeholder="Search...">
          <button type="submit">Search</button>
        </form>
        <!-- <button class="dark-mode-toggle" id="dark-mode-toggle">
    <i class="fa fa-moon"></i>
  </button> -->
      </div>
    </nav>
  </header>

  <a href="https://wa.me/your-whatsapp-number" target="_blank" class="whatsapp-logo whatsapp-sticky">
    <i class="fab fa-whatsapp fa-2x"></i>
</a>

<script>
  const darkModeToggle = document.getElementById('dark-mode-toggle');
  const body = document.body;

  darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
  });

  // Check if dark mode is enabled on page load
  if (localStorage.getItem('darkMode') === 'true') {
    body.classList.add('dark-mode');
  }
</script>
</body>
</html>