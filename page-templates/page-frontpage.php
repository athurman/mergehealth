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
      <a href="#" class="blue-btn">Get Started Today</a>
    </div>
  </div>
  <div id="what-we-offer" class="textured">
    <div class="wrap">
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-health.png" alt="Health Icon Holding Plant">
        <h2 class="text-center upcase"><span class="number">1</span></h2>
        <h4 class="text-center upcase">Health</h4>
        <p class="text-center">Gain a deeper self understanding and uncover ways to move forward in positive, healthy ways.</p>
      </div>
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-nutrition.png" alt="Nutrition Icon Grains">
        <h2 class="text-center upcase"><span class="number">2</span></h2>
        <h4 class="text-center upcase">Nutrition</h4>
        <p class="text-center">Discover how food and lifestyle choices affect every aspect of your life, including energy and stress.</p>
      </div>
      <div class="m-all t-1of3 d-1of3 icon-main">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mergehealth-icon-fitness.png" alt="Fitness Icon Yoga Pose">
        <h2 class="text-center upcase"><span class="number">3</span></h2>
        <h4 class="text-center upcase">Fitness</h4>
        <p class="text-center">Receive at home personal training with a customized workout plan to achieve your personal goals.</p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="testimonials-container">
    <div class="wrap">
      <h3 class="text-center">"I have been a client of BJ Toups for over 7 years. He is a true professional in the field of neuromuscular therapy and fitness training. Those combined abilities and his degree in exercise physiology make him the complete package. At age 69, I am able to increase the amount of weights I lift and improve my exercise tolerance. He can massage and stretch any sore muscle and this enables me to work out on a regular basis. I credit my increased performance to BJ and whole heartedly endorse him."</h3>
      <h4 class="text-center">Michael Levine, M.D.</h4>
      <h6 class="text-center">Atlanta, Ga.</h6>
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
