<?php
/*
Template Name: What We Offer Page
*/

$main_header = get_field('main_what_we_offer_header');
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
        <p>Cupcake ipsum dolor sit amet sugar plum cheesecake oat cake candy canes. Ice cream fruitcake marzipan. Jelly pastry soufflé cake tiramisu chocolate cake gingerbread.</p>
        <p>Sugar plum bear claw candy canes wafer cake tart croissant candy canes lollipop. Jelly beans oat cake fruitcake muffin. Sweet toffee cookie chupa chups carrot cake apple pie chupa chups.</p>
      </div>
      <div class="service green">
        <h1 class="text-center">Fitness</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/fitness-icon.png" alt="Fitness Icon Yoga">
        <p>Cupcake ipsum dolor sit amet sugar plum cheesecake oat cake candy canes. Ice cream fruitcake marzipan. Jelly pastry soufflé cake tiramisu chocolate cake gingerbread.</p>
        <p>Sugar plum bear claw candy canes wafer cake tart croissant candy canes lollipop. Jelly beans oat cake fruitcake muffin. Sweet toffee cookie chupa chups carrot cake apple pie chupa chups.</p>
      </div>
      <div class="service gray">
        <h1 class="text-center">Wellness Retreats</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/health-icon.png" alt="Health Icon Holding Plant">
        <p>Cupcake ipsum dolor sit amet sugar plum cheesecake oat cake candy canes. Ice cream fruitcake marzipan. Jelly pastry soufflé cake tiramisu chocolate cake gingerbread.</p>
        <p>Sugar plum bear claw candy canes wafer cake tart croissant candy canes lollipop. Jelly beans oat cake fruitcake muffin. Sweet toffee cookie chupa chups carrot cake apple pie chupa chups.</p>
      </div>
      <div class="service biege">
        <h1 class="text-center">Corporate Wellness</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/merge-icon.png" alt="Merge Health, Fitness and Nutrition Icon">
        <p>Cupcake ipsum dolor sit amet sugar plum cheesecake oat cake candy canes. Ice cream fruitcake marzipan. Jelly pastry soufflé cake tiramisu chocolate cake gingerbread.</p>
        <p>Sugar plum bear claw candy canes wafer cake tart croissant candy canes lollipop. Jelly beans oat cake fruitcake muffin. Sweet toffee cookie chupa chups carrot cake apple pie chupa chups.</p>
      </div>
      <div class="service light-blue">
        <h1 class="text-center">Counseling</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/counseling-icon.png" alt="Counseling Icon Word Bubbles">
        <p>Cupcake ipsum dolor sit amet sugar plum cheesecake oat cake candy canes. Ice cream fruitcake marzipan. Jelly pastry soufflé cake tiramisu chocolate cake gingerbread.</p>
        <p>Sugar plum bear claw candy canes wafer cake tart croissant candy canes lollipop. Jelly beans oat cake fruitcake muffin. Sweet toffee cookie chupa chups carrot cake apple pie chupa chups.</p>
      </div>
      <div class="service textured">
        <h1 class="text-center">Events</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/calendar-icon.png" alt="Calendar Icon">
        <p>Cupcake ipsum dolor sit amet sugar plum cheesecake oat cake candy canes. Ice cream fruitcake marzipan. Jelly pastry soufflé cake tiramisu chocolate cake gingerbread.</p>
        <p>Sugar plum bear claw candy canes wafer cake tart croissant candy canes lollipop. Jelly beans oat cake fruitcake muffin. Sweet toffee cookie chupa chups carrot cake apple pie chupa chups.</p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
