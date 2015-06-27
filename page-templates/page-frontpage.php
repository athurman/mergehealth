<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="homepage-hero">
    <div class="wrap">
      <h1 class="text-center main">Achieve Your Health and Wellness Goals</h1>
      <h4 class="text-center subheader">Merge personal training with health and nutrition coaching to help you get there.</h4>
    </div>
  </div>
  <div id="what-we-offer" class="textured">
    <div class="wrap">
      <div class="m-all t-1of3 d-1of3 icon-main">
        <h2 class="text-center upcase">1</h2>
        <h4 class="text-center upcase">Health</h4>
        <p class="text-center">Gain a deeper self understanding and uncover ways to move forward in positive, healthy ways.</p>
      </div>
      <div class="m-all t-1of3 d-1of3 icon-main">
        <h2 class="text-center upcase">2</h2>
        <h4 class="text-center upcase">Nutrition</h4>
        <p class="text-center">Discover how food and lifestyle choices affect every aspect of your life, including energy and stress.</p>
      </div>
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-fitness.png" alt="Fitness Icon Yoga Pose">
        <h2 class="text-center upcase">3</h2>
        <h4 class="text-center upcase">Fitness</h4>
        <p class="text-center">Receive at home personal training with a customized workout plan to achieve your personal goals.</p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
