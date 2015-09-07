<?php
/*
Template Name: What We Offer Page
*/

$main_header = get_field('main_what_we_offer_header');
$health_and_nutrition = get_field('health_and_nutrition');
$fitness = get_field('fitness');
$wellness_retreats = get_field('wellness_retreats');
$corporate_wellness = get_field('corporate_wellness');
$counseling = get_field('counseling');
$events = get_field('events');
?>
<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="servicespage-hero">
    <div class="wrap">
      <h1 class="text-center main"><?php echo $main_header; ?></h1>
    </div>
  </div>
  <div id="breakdown-services" class="section">
    <div class="services wrap">
      <div class="service textured">
        <h1 class="text-center">Health & Nutrition</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/nutrition-icon.png" alt="Nutrition Icon Plant">
        <?php echo $health_and_nutrition; ?>
        <a href="#" class="gray-btn">Learn More</a>
        <div class="service-link">
          <a href="<?php echo home_url(); ?>/health-and-nutrition">Learn More</a>
        </div>
      </div>
      <div class="service green">
        <h1 class="text-center">Fitness</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/fitness-icon.png" alt="Fitness Icon Yoga">
        <?php echo $fitness; ?>
        <a href="<?php echo home_url(); ?>/fitness-services" class="gray-btn">Learn More</a>
        <div class="service-link">
          <a href="<?php echo home_url(); ?>/fitness-services">Learn More</a>
        </div>
      </div>
      <div class="service gray">
        <h1 class="text-center">Wellness Retreats</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/health-icon.png" alt="Health Icon Holding Plant">
        <?php echo $wellness_retreats; ?>
        <a href="http://www.innerjourneyretreats.com/" class="gray-btn">Learn More</a>
        <div class="service-link">
          <a href="http://www.innerjourneyretreats.com/">Learn More</a>
        </div>
      </div>
      <div class="service biege">
        <h1 class="text-center">Corporate Wellness</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/merge-icon.png" alt="Merge Health, Fitness and Nutrition Icon">
        <?php echo $corporate_wellness; ?>
        <a href="#" class="gray-btn">Learn More</a>
        <div class="service-link">
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service light-blue">
        <h1 class="text-center">Counseling</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/counseling-icon.png" alt="Counseling Icon Word Bubbles">
        <?php echo $counseling; ?>
        <a href="#" class="gray-btn">Learn More</a>
        <div class="service-link">
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service textured">
        <h1 class="text-center">Events</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/calendar-icon.png" alt="Calendar Icon">
        <?php echo $events; ?>
        <a href="#" class="gray-btn">Learn More</a>
        <div class="service-link">
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
