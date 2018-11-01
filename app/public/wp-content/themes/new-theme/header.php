<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
    <div class="container">
      <?php
      if (!(is_front_page())) { ?>
       <h1 class="header-logo-text float-left"><a href="<?php echo site_url(); ?>"><strong>Fresno</strong> Indoor <strong>Soccer</strong></a></h1>;
      <?php } ?>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/schedule'); ?>">Schedule</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
