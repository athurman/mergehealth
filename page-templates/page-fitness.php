<?php
/*
Template Name: Fitness
*/

$main_header = get_field('fitness_main_header');
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="fitnesspage-hero">
    <div class="wrap">
      <h1 class="text-center main"><?php echo $main_header; ?></h1>
    </div>
  </div>
  <div id="personal-training" class="section">
    <div class="wrap">
      <h4 class="subheader">Personal Training</h4>
    </div>
  </div>
  <div id="boot-camp" class="textured">
    <div class="wrap">
      <h4 class="subheader">Boot Camp</h4>
    </div>
  </div>
  <div id="swim" class="section">
    <div class="wrap">
      <h4 class="subheader">Swim Classes</h4>
    </div>
  </div>
</div>
<?php get_footer(); ?>
