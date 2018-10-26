<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/field.jpg') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h2 class="headline headline--large"><strong>Fresno</strong> Indoor <strong>Soccer</strong></h2>
      <br>
      <br>
      <a href="<?php echo site_url('/about-us'); ?>" class="btn btn--large btn--white">Come <strong>kick it</strong> with us!</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
        
        <div class="event-summary">
          <a class="event-summary__date t-center" href="<?php echo site_url('/schedule'); ?>">
            <span class="event-summary__month">Oct</span>
            <span class="event-summary__day">25</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/schedule'); ?>">Coed Signups Due</a></h5>
            <p>Registration for Coed leagues must be submitted with deposit by this date. There are still spots available in D3 and D1. <a href="<?php echo site_url('/contact'); ?>" class="nu gray">Contact Us</a></p>
          </div>
        </div>
        <div class="event-summary">
          <a class="event-summary__date t-center" href="<?php echo site_url('/schedule'); ?>">
            <span class="event-summary__month">Nov</span>
            <span class="event-summary__day">02</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/schedule'); ?>">Mens Tournament</a></h5>
            <p>The mens tournament will feature 6v6 teams competing to be the FIS Champions.  T-shirts are included with registration. <a href="<?php echo site_url('/contact'); ?>" class="nu gray">Contact Us</a></p>
          </div>
        </div>
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/schedule'); ?>" class="btn btn--gray">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Sep</span>
            <span class="event-summary__day">20</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">I Heart FC take D3 Trophy</a></h5>
            <p>I Heart FC captured the D3 title after a multi-season run in D1. The team will be looking forward to challenging in D2 next season. <a href="#" class="nu gray">Read more</a></p>
          </div>
        </div>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Oct</span>
            <span class="event-summary__day">04</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Now Hiring: Referees</a></h5>
            <p>FIS is looking to add two more referees to our team.  Please send an email with your resume to fis@soccermail.com. <a href="#" class="nu gray">Read more</a></p>
          </div>
        </div>
        
        <p class="t-center no-margin"><a href="#" class="btn btn--white">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/kids.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">League Play</h2>
        <p class="t-center">Mens, Coed and kids leagues available.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--white">Register Today</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bikekick.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Fields</h2>
        <p class="t-center">Two fields. Big and small. For all your needs.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--white">Reserve a Field</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/balls.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">A Third Slide</h2>
        <p class="t-center">Wow! We're gonna need more info.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--white">Just Click Anyways</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer();

?>


