<?php
/*
Template Name: Events Page
*/

$events_query = null;
$terms_args = array(
  'orderby'    => 'name',
  'order'      => 'ASC',
  'hide_empty' => false,
);
$terms = get_terms( 'event_type', 'orderby=name&hide_empty=0' );
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="eventspage-hero">
    <div class="wrap">
      <h1 class="text-center main">Events</h1>
    </div>
  </div>
  <!-- EVENTS -->
  <div id="events-breakdown" class="section">
    <div class="wrap">
      <?php
      foreach ( $terms as $term ) {
        $args=array(
          'event_type' => $term->slug,
          'post_type' => 'event',
          'post_status' => 'publish',
          'posts_per_page' => -1,
        );
        $events_query = new WP_Query($args);
        $i = 0;
        if( $events_query->have_posts() ) {
          echo '<h2 class="subheader">'.$term->name.'</h2>';
          while ($events_query->have_posts()) : $events_query->the_post();
          $event_date = get_field('event_date');
          $event_time = strtotime($event_date);
          $last_24_hours = time()-(60*60*24);
          if($last_24_hours < $event_time) { ?>
            <p class="event"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
      <?php
            $i++;
          }
          endwhile;
        }
        wp_reset_query();
      }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
