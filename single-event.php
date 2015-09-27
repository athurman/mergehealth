<?php
$post_id = get_the_ID();
$post = wp_get_single_post($post_id);

$event_date = get_field('event_date', $post_id);
$formatted_date = date('m/d/Y', strtotime($event_date));
$event_time = get_field('event_time', $post_id);
$formatted_time = !empty($event_time) ? ' @ '.$event_time : '';

$event_venue = get_field('event_location_venue_name', $post_id);
$event_street_address = get_field('event_location_street_address', $post_id);
$event_city_state = get_field('event_location_city_state_zip', $post_id);

$cost = get_field('cost', $post_id);

$registry_link = get_field('registry_link', $post_id);
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
      <main id="main" class="m-all t-2of3 d-3of4 cf" role="main">
        <div class="event-heading">
          <div class="m-all t-1of3 d-1of4 thumbnail-event">
            <?php echo get_the_post_thumbnail($post_id,  array(350,350) , 'medium'); ?>
          </div>
          <div class="m-all t-2of3 d-3of4 event-title">
            <h2><?php echo the_title(); ?></h2>
          </div>
          <div class="clear"></div>
        </div>

        <table>
          <?php if(!empty($formatted_date)) { ?>
          <tr>
            <td class="heading">When</td>
            <td><?php echo $formatted_date.$formatted_time; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($event_street_address)) { ?>
          <tr>
            <td  style="vertical-align: top;" class="heading">Where</td>
            <td style="vertical-align: top;">
              <?php if(!empty($event_venue)) {
                echo $event_venue.'<br />';
              } ?>
              <?php echo $event_street_address; ?>
              <?php if(!empty($event_city_state)) {
                echo '<br />'.$event_city_state;
              } ?>
            </td>
          </tr>
          <?php } ?>
          <?php if(!empty($cost)) { ?>
          <tr>
            <td class="heading">Cost</td>
            <td><?php echo $cost; ?></td>
          </tr>
          <?php } ?>
        </table>
        <h2>About</h2>
        <?php echo $post->post_content; ?>
        <?php if(!empty($registry_link)) { ?>
        <h2>Register Now</h2>
        <?php echo $registry_link; ?>
        <?php } ?>
       </main>
       <?php get_sidebar(); ?>
       <div class="clear"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
