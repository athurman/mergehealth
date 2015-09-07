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
$counseling_services_text = get_field('counseling_services_text');
$health_coaching_header = get_field('health_coaching_header');
$health_coaching_sub_header = get_field('health_coaching_sub_header');
$health_coaching_text = get_field('health_coaching_text');
$retreats_header = get_field('retreats_header');
$retreats_sub_header = get_field('retreats_sub_header');
$retreats_text = get_field('retreats_text');
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
  <div class="dark-blue section philosophy">
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
  <?php if(!empty($counseling_services_text)) { ?>
  <div class="magenta section counseling-services">
    <div class="wrap">
      <h4 class="section-header">Therapy Services</h4>
      <?php echo $counseling_services_text; ?>
    </div>
  </div>
  <?php } ?>
  <!-- Health Coaching Services -->
  <div id="health-coaching-services" class="section">
    <div class="wrap">
      <h1 class="counseling-header text-center"><?php echo $health_coaching_header; ?></h1>
      <?php if(!empty($health_coaching_sub_header)) { ?>
      <h2 class="counseling-sub-header text-center"><?php echo $health_coaching_sub_header; ?></h2>
      <?php } ?>
    </div>
  </div>
  <?php if(!empty($health_coaching_text)) { ?>
  <div class="light-blue section health-coaching">
    <div class="wrap">
      <h4 class="section-header">Mind-Body Health & Nutrition Coaching</h4>
      <?php echo $health_coaching_text; ?>
    </div>
  </div>
  <?php } ?>
  <!-- Retreats -->
  <div id="retreats" class="section">
    <div class="wrap">
      <h1 class="counseling-header text-center"><?php echo $retreats_header; ?></h1>
      <?php if(!empty($retreats_sub_header)) { ?>
      <h2 class="counseling-sub-header text-center"><?php echo $retreats_sub_header; ?></h2>
      <?php } ?>
    </div>
  </div>
  <?php if(!empty($retreats_text)) { ?>
  <div class="teal section health-coaching">
    <div class="wrap">
      <h4 class="section-header">Inner Journey Retreats</h4>
      <?php echo $retreats_text; ?>
    </div>
  </div>
  <?php } ?>
  <!-- Contact -->
  <div id="contact-section" class="section">
    <div class="wrap">
      <h1 class="counseling-header text-center">Contact</h1>
      <h2 class="counseling-sub-header text-center">Meghan Toups</h2>
      <h2 class="text-center"><a href="mailto:meghan@mergeintohealth.com">meghan@mergeintohealth.com</a></h2>
      <h2 class="counseling-sub-header text-center">770.298.2823</h2>
      <ul class="text-center">
        <li><a href="https://www.facebook.com/MergeHFN"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://instagram.com/meghanktoups/"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/Meghantoups"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<?php get_footer( 'counseling' ); ?>
