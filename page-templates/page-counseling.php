<?php
/*
Template Name: Counseling
*/

// Retirieve fields:
$main_about_header = get_field('main_about_header');
$main_about_sub_header = get_field('main_about_sub_header');
$about_meghan = get_field('about_meghan');
$education_and_work_experience = get_field('education_and_work_experience');
$philosophy = get_field('philosophy');
$counseling_section_header = get_field('counseling_service_header');
$counseling_section_sub_header = get_field('counseling_section_sub_header');
?>
<?php get_header( 'counseling' ); ?>
<div id="content">
  <!-- About Section -->
  <div id="about-counseling" class="section">
    <div class="wrap">
      <h1 class="counseling-header text-center"><?php echo $main_about_header; ?></h1>
      <h2 class="counseling-sub-header text-center"><?php echo $main_about_sub_header; ?></h2>
    </div>
  </div>
  <div class="teal section about-meghan">
    <div class="wrap">
      <h4 class="section-header">About Meghan</h4>
      <?php echo $about_meghan; ?>
    </div>
  </div>
  <?php if(!empty($education_and_work_experience)) { ?>
  <div class="magenta section work-experience">
    <div class="wrap">
      <h4 class="section-header">Education & Work Experience</h4>
      <?php echo $education_and_work_experience; ?>
    </div>
  </div>
  <?php } ?>
  <?php if(!empty($philosophy)) { ?>
  <div class="dark-blue section work-experience">
    <div class="wrap">
      <h4 class="section-header">Philosophy</h4>
      <?php echo $philosophy; ?>
    </div>
  </div>
  <?php } ?>
  <!-- Counseling Services -->
  <div id="counseling-services" class="section">
    <div class="wrap">
      <h1 class="counseling-header text-center"><?php echo $counseling_section_header; ?></h1>
      <?php if(!empty($counseling_section_sub_header)) { ?>
      <h2 class="counseling-sub-header text-center"><?php echo $counseling_section_sub_header; ?></h2>
      <?php } ?>
    </div>
  </div>
</div>
<?php get_footer( 'counseling' ); ?>
