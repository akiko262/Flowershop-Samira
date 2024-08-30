<!-- Header Start -->
<header class="site-header">
        <div class="wrapper site-header__wrapper">
        <h1 class="logo">
  <a href="<?php echo isset($is_home) ? '#' : $path . 'index.php'; ?>">
    <img src="<?php echo $path; ?>imgs/Samira.png" alt="logo">
  </a>
</h1>
          <nav class="nav">
            <div class="nav__toggle" aria-expanded="false" type="button" id="navToggle">
              <span class="toggle-line"></span>
              <span class="toggle-line"></span>
              <span class="toggle-line"></span>
            </div>
            <ul class="nav__wrapper" id="navWrapper">
              <li class="nav__item"><a href="<?php echo $path; ?>index.php">Home</a></li>
              <li class="nav__item"><a href="<?php echo $path; ?>rental/index.php">Rental</a></li>
              <li class="nav__item"><a href="<?php echo $path; ?>order/index.php">Order</a></li>
              <li class="nav__item"><a href="<?php echo $path; ?>lesson/index.php">Lesson</a></li>
              <li class="nav__item"><a href="#contact" class="contact-btn">Contact</a></li>
            </ul>
          </nav>
        </div>
</header>
<!-- Header End -->