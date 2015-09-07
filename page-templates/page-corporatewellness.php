<?php
/*
Template Name: Corporate Wellness Page
*/

$main_header = get_field('corporate_main_header');
$section_one_header = get_field('corporate_wellness_section_one_header');
$section_one_text = get_field('corporate_wellness_section_one_text');
$section_two_header = get_field('corporate_wellness_section_two_header');
$section_two_text = get_field('corporate_wellness_section_two_text');
$section_three_header = get_field('corporate_wellness_section_three_header');
$section_three_text = get_field('corporate_wellness_section_three_text');

?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="corporate-wellness-hero">
    <div class="wrap">
      <h1 class="text-center main"><?php echo $main_header; ?></h1>
    </div>
  </div>
  <div id="corporate-section-one" class="textured">
    <div class="wrap">
      <h4 class="subheader"><?php echo $section_one_header; ?></h4>
      <div class="about-health-container">
        <?php echo $section_one_text; ?>
      </div>
    </div>
  </div>
  <?php if(!empty($section_two_header) && !empty($section_two_text)) { ?>
  <div id="corporate-section-two" class="section">
    <div class="wrap">
      <h4 class="subheader"><?php echo $section_two_header; ?></h4>
      <div class="about-health-container">
        <?php echo $section_two_text; ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if(!empty($section_three_header) && !empty($section_three_text)) { ?>
  <div id="corporate-section-three" class="textured">
    <div class="wrap">
      <h4 class="subheader"><?php echo $section_three_header; ?></h4>
      <div class="about-health-container">
        <?php echo $section_three_text; ?>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<?php get_footer(); ?>
