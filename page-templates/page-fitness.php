<?php
/*
Template Name: Fitness
*/

$main_header = get_field('fitness_main_header');
$personal_training_text = get_field('personal_training_text');
$boot_camp_text = get_field('boot_camp_text');
$swim_classes_text = get_field('swim_classes_text');
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
      <?php
      if(!empty($personal_training_text)) {
        echo $personal_training_text;
      }
      ?>
    </div>
  </div>
  <div id="boot-camp" class="textured">
    <div class="wrap">
      <h4 class="subheader">Boot Camp</h4>
      <?php
      if(!empty($boot_camp_text)) {
        echo $boot_camp_text;
      }
      ?>
    </div>
  </div>
  <div id="swim" class="section">
    <div class="wrap">
      <h4 class="subheader">Swim Classes</h4>
      <?php
      if(!empty($swim_classes_text)) {
        echo $swim_classes_text;
      }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
