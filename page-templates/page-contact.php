<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
<div class="content">
  <!-- HERO SECTION -->
  <div id="contactpage-hero">
  </div>
  <div id="contact-form" class="textured">
    <div class="wrap">
      <div class="form-container">
        <h4 class="subheader">Contact Us Today for a FREE Consultation</h4>
        <span class="form-stuff"></span>
        <form id="contact-us-form" method="post" action="">
          <div class="t-all d-all  m-all">
            <label for="first_name">Name*</label>
            <input type="text" id="name" class="required" name="name" required autofocus />
          </div>
          <div class="t-all d-all  m-all">
            <label for="email">Email*</label>
            <input type="text" id="email" class="email required" name="email" required />
          </div>
          <div class="t-all d-all m-all">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" class="phone" name="phone" />
          </div>
          <div class="t-all d-all m-all">
            <label for="message">Message*</label>
            <textarea rows="10" name="message" id="message" class="required" required ></textarea>
          </div>
          <div class="clear"></div>
          <input class="blue-btn t-all d-all m-all" type="submit" value="Submit" id="contact-form-submit">
          <div class="clear"></div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
