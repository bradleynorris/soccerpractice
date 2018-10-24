<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <div class="container">
      <h1 class="footer-logo-text float-left"><a href="<?php echo site_url(); ?>"><strong>Fresno</strong> Indoor <strong>Soccer</strong></a></h1>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/schedule'); ?>">Schedule</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
