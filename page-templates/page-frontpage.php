<?php
/*
Template Name: Front Page
*/

$main_header = get_field('main_header');
$sub_header = get_field('main_sub_header');

$args = array(
  'post_type'      => 'testimonial',
  'posts_per_page' => -1
);
$testimonial_query = new WP_Query( $args );
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="homepage-hero">
    <div class="wrap">
      <h1 class="text-center main"><?php echo $main_header; ?></h1>
      <h4 class="text-center subheader"><?php echo $sub_header; ?></h4>
      <a href="#" class="blue-btn">Get Started Today</a>
    </div>
  </div>
  <div id="what-we-offer" class="textured">
    <div class="wrap">
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-health.png" alt="Health Icon Holding Plant">
        <h2 class="text-center upcase"><span class="number">1</span></h2>
        <h4 class="text-center upcase"><a href="#">Health</a></h4>
        <p class="text-center">Gain a deeper self understanding and uncover ways to move forward in positive, healthy ways.</p>
      </div>
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-nutrition.png" alt="Nutrition Icon Grains">
        <h2 class="text-center upcase"><span class="number">2</span></h2>
        <h4 class="text-center upcase"><a href="#">Nutrition</a></h4>
        <p class="text-center">Discover how food and lifestyle choices affect every aspect of your life, including energy and stress.</p>
      </div>
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-fitness.png" alt="Fitness Icon Yoga Pose">
        <h2 class="text-center upcase"><span class="number">3</span></h2>
        <h4 class="text-center upcase"><a href="#">Fitness</a></h4>
        <p class="text-center">Receive at home personal training with a customized workout plan to achieve your personal goals.</p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="testimonials-container">
    <div class="wrap">
      <?php
      if ( $testimonial_query->have_posts() ) {
        $i = 1;
        while ( $testimonial_query->have_posts() ) {
          $testimonial_query->the_post();
          $new_content = strip_tags(get_the_content());
          $customer_name = get_field('customer_name');
          $customer_location = get_field('customer_city_state');
          if($i === 1) {
            echo '<div class="testimonial quote-'.$i.'">';
              echo '<i class="fa fa-angle-left"></i>';
              echo '<div class="testimonial-content">';
                echo '<h3 class="text-center">'.$new_content.'</h3>';
                echo '<h4 class="text-center">'.$customer_name.'</h4>';
                echo '<h6 class="text-center">'.$customer_location.'</h6>';
              echo '</div>';
              echo '<i class="fa fa-angle-right"></i>';
            echo '</div>';
          } else {
            echo '<div class="testimonial quote-'.$i.' hidden">';
              echo '<i class="fa fa-angle-left"></i>';
              echo '<div class="testimonial-content">';
                echo '<h3 class="text-center">'.$new_content.'</h3>';
                echo '<h4 class="text-center">'.$customer_name.'</h4>';
                echo '<h6 class="text-center">'.$customer_location.'</h6>';
              echo '</div>';
              echo '<i class="fa fa-angle-right"></i>';
            echo '</div>';
          }
          $i++;
        }
      }
      ?>
    </div>
  </div>
  <div id="mission-statement" class="textured">
    <div class="wrap">
      <h2 class="text-center">Learn how to integrate health, fitness and nutrition for optimal balance and health in your life.</h2>
      <a href="#" class="blue-btn">What We Offer</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
