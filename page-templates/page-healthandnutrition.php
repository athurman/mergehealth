<?php
/*
Template Name: Health and Nutrition
*/

$main_header = get_field('health_main_header');
$about_health_header = get_field('about_health_header');
$about_health_text = get_field('about_health_text');
$nutrition_coaching_text = get_field('nutrition_coaching_text');
$monthly_challenge_text = get_field('monthly_challenge_text');
$merge_moms_text = get_field('merge_moms_text');
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="nutritionpage-hero">
    <div class="wrap">
      <h1 class="text-center main"><?php echo $main_header; ?></h1>
    </div>
  </div>
  <div id="about-health" class="section">
    <div class="wrap">
      <h4 class="subheader"><?php echo $about_health_header; ?></h4>
      <div class="about-health-container">
        <?php echo $about_health_text; ?>
      </div>
    </div>
  </div>
  <div id="nutrition-coaching" class="section">
    <div class="wrap">
      <h1 class="sub-main text-center">Mind-Body Health & Nutrition Coaching</h1>
      <a class="text-center" href="#" data-toggle="modal" data-target="#nutritionInfoModal">Learn More</a>
      <div class="mobile-container">
        <?php
        if(!empty($nutrition_coaching_text)) {
          echo $nutrition_coaching_text;
        }
        ?>
      </div>
    </div>
  </div>
  <div id="monthly-challenges" class="section">
    <div class="wrap">
      <h1 class="sub-main text-center">Counseling Services</h1>
      <a class="text-center" href="#" data-toggle="modal" data-target="#challengeInfoModal">Learn More</a>
      <div class="mobile-container">
        <?php
        if(!empty($monthly_challenge_text)) {
          echo $monthly_challenge_text;
        }
        ?>
      </div>
    </div>
  </div>
  <div id="merge-moms" class="section hidden">
    <div class="wrap">
      <h1 class="sub-main text-center">Merge Moms</h1>
      <a class="text-center" href="#" data-toggle="modal" data-target="#mergemomInfoModal">Learn More</a>
      <div class="mobile-container">
        <?php
        if(!empty($merge_moms_text)) {
          echo $merge_moms_text;
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- Personal Training Modal -->
<div class="modal fade" id="nutritionInfoModal" tabindex="-1" role="dialog" aria-labelledby="fitnessInfo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mind-Body Health & Nutrition Coaching</h4>
      </div>
      <div class="modal-body">
        <?php
        if(!empty($nutrition_coaching_text)) {
          echo $nutrition_coaching_text;
        }
        ?>
        <p><a href="mailto:info@mergeintohealth.com?Subject=Health%20and%20Nutrition%20Coaching%20Inquiry">Email us for more information.</a></p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo home_url(); ?>/contact/" class="blue-btn">Get Started Today</a>
      </div>
    </div>
  </div>
</div>
<!-- Boot Camp Modal -->
<div class="modal fade" id="challengeInfoModal" tabindex="-1" role="dialog" aria-labelledby="fitnessInfo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Counseling Services</h4>
      </div>
      <div class="modal-body">
        <?php
        if(!empty($monthly_challenge_text)) {
          echo $monthly_challenge_text;
        }
        ?>
        <p><a href="mailto:info@mergeintohealth.com?Subject=Counseling%20Services%20Inquiry">Email us for more information.</a></p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo home_url(); ?>/counseling/" class="blue-btn">Get More Info</a>
      </div>
    </div>
  </div>
</div>
<!-- Swimming Modal -->
<div class="modal fade" id="mergemomInfoModal" tabindex="-1" role="dialog" aria-labelledby="fitnessInfo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Merge Moms</h4>
      </div>
      <div class="modal-body">
        <?php
        if(!empty($merge_moms_text)) {
          echo $merge_moms_text;
        }
        ?>
        <p><a href="mailto:info@mergeintohealth.com?Subject=Merge%20Moms%20Inquiry">Email us for more information.</a></p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo home_url(); ?>/contact/" class="blue-btn">Get Started Today</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
