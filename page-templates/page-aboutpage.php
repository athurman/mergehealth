<?php
/*
Template Name: About Page
*/

$main_header = get_field('main_about_header');

$args = array(
  'post_type'      => 'team_member',
  'posts_per_page' => -1,
  'orderby'        => 'menu_order',
  'order'          => 'ASC'
);
$team_member_query = new WP_Query( $args );
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="aboutpage-hero">
    <div class="wrap">
      <h1 class="text-center main"><?php echo $main_header; ?></h1>
    </div>
  </div>
  <div id="more-about-us" class="section">
    <div class="wrap">
      <h4 class="subheader">Our Clients</h4>
      <?php
      if ( have_posts() ) : while( have_posts() ) : the_post();
        the_content();
      endwhile; endif;
      ?>
    </div>
  </div>
  <div id="meet-the-team" class="textured">
    <div class="wrap">
      <h4 class="subheader">Meet the Team</h4>
      <div class="team-meber-container">
        <?php
        if ( $team_member_query->have_posts() ) {
          $i = 1;
          while ( $team_member_query->have_posts() ) {
            $team_member_query->the_post();
            $new_content = get_the_content();
            $job_title = get_field('title');
            $credentials = get_field('credentials');
        ?>
          <div class="team-member">
            <div class="m-all t-1of4 d-1of5">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
              }
              ?>
            </div>
            <div class="m-all t-3of4 d-4of5">
              <h3 class="name"><?php echo get_the_title(); ?></h3>
              <p class="job-title"><?php echo $job_title; ?></p>
              <?php echo $new_content; ?>
              <?php if(!empty($credentials)) { ?>
              <p class="credentials"><?php echo $credentials; ?></p>
              <?php } ?>
            </div>
            <div class="clear"></div>
          </div>
        <?php
            $i++;
          }
        }
        ?>
      </div>
    </div>
  </div>
  <div id="contact-cta" class="section">
    <div class="wrap">
      <h4 class="subheader text-center">There is a happier, healthier version of you waiting to be uncovered. Contact us today for a FREE health consultation.</h4>
      <a href="<?php echo home_url(); ?>/contact" class="blue-btn">Get Started</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
