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
      <h1 class="sub-main text-center">Personal Training</h1>
      <a class="text-center" href="#" data-toggle="modal" data-target="#trainingInfoModal">Learn More</a>
      <div class="mobile-container">
        <?php
        if(!empty($personal_training_text)) {
          echo $personal_training_text;
        }
        ?>
      </div>
    </div>
  </div>
  <div id="boot-camp" class="section">
    <div class="wrap">
      <h1 class="sub-main text-center">Boot Camp</h1>
      <a class="text-center" href="#" data-toggle="modal" data-target="#bootcampInfoModal">Learn More</a>
      <div class="mobile-container">
        <?php
        if(!empty($boot_camp_text)) {
          echo $boot_camp_text;
        }
        ?>
      </div>
    </div>
  </div>
  <div id="swim" class="section">
    <div class="wrap">
      <h1 class="sub-main text-center">Swim Classes</h1>
      <a class="text-center" href="#" data-toggle="modal" data-target="#swimmingInfoModal">Learn More</a>
      <div class="mobile-container">
        <?php
        if(!empty($swim_classes_text)) {
          echo $swim_classes_text;
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- Personal Training Modal -->
<div class="modal fade" id="trainingInfoModal" tabindex="-1" role="dialog" aria-labelledby="fitnessInfo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Personal Training</h4>
      </div>
      <div class="modal-body">
        <?php
        if(!empty($personal_training_text)) {
          echo $personal_training_text;
        }
        ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Boot Camp Modal -->
<div class="modal fade" id="bootcampInfoModal" tabindex="-1" role="dialog" aria-labelledby="fitnessInfo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Boot Camp</h4>
      </div>
      <div class="modal-body">
        <?php
        if(!empty($boot_camp_text)) {
          echo $boot_camp_text;
        }
        ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Swimming Modal -->
<div class="modal fade" id="swimmingInfoModal" tabindex="-1" role="dialog" aria-labelledby="fitnessInfo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Swim Classes</h4>
      </div>
      <div class="modal-body">
        <?php
        if(!empty($swim_classes_text)) {
          echo $swim_classes_text;
        }
        ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
