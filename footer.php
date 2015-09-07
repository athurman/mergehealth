      <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div id="inner-footer" class="wrap cf">
          <nav role="navigation">
            <ul class='site-nav footer-links'>
              <li class='link-top'>Company</li>
              <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
              <li><a href="<?php echo home_url(); ?>/about">About</a></li>
              <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
              <li><a href="<?php echo home_url(); ?>/what-we-offer">What We Offer</a></li>
            </ul>
            <ul class='site-nav footer-links'>
              <li class='link-top'>Services</li>
              <li><a href="<?php echo home_url(); ?>/fitness-services">Fitness</a></li>
              <li><a href="#">Counseling</a></li>
              <li><a href="<?php echo home_url(); ?>/health-and-nutrition">Health & Nutrition</a></li>
              <li><a href="<?php echo home_url(); ?>/corporate-wellness">Corporate Wellness</a></li>
            </ul>
            <ul class='site-nav footer-links'>
              <li class='link-top'>Events</li>
              <li><a href="#">Events</a></li>
              <li><a href="http://www.innerjourneyretreats.com/">Wellness Retreats</a></li>
              <li><a href="#">Workshops & Talks</a></li>
            </ul>
            <div class="clear"></div>
          </nav>
          <div class="footer-right">
            <ul class="footer-social-links">
              <li><a href="https://twitter.com/MergeIntoHealth" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://instagram.com/mergeintohealth/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.facebook.com/MergeHFN" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCuqQnlPp3xuzDHaeB6lAMSQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </footer>
    </div>
    <?php // all js scripts are loaded in library/mergehealth.php ?>
    <?php wp_footer(); ?>
  </body>
</html>
