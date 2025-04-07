<?php 
$currentPage = basename($_SERVER['SCRIPT_FILENAME']);
?>
<header>
  <div class="container">
    <div class="main-nav">
      <a href="index.php" class="logo">
        <img src="images/Logo.jpg" alt="Logo">
        Nome azienda
      </a>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      
      <nav id="nav">
        <ul>
          <li><a href="index.php" <?php if ($currentPage == 'index.php'){echo 'id="here"';}?>>Home</a></li>
          <li><a href="about-us.php" <?php if ($currentPage == 'about-us.php'){echo 'id="here"';}?>>Chi Siamo</a></li>
          <li><a href="services.php" <?php if ($currentPage == 'services.php'){echo 'id="here"';}?>>Servizi</a></li>
          <li><a href="contact-us.php" <?php if ($currentPage == 'contact-us.php'){echo 'id="here"';}?>>Contatti</a></li>
        </ul>
      </nav>

      <button class="toggle-button" id="toggle-button">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</header>

<script>
document.getElementById('toggle-button').addEventListener('click', function() {
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
});
</script>
