      <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div id="inner-footer" class="wrap cf">
          <nav role="navigation">
            <ul class='site-nav footer-links'>
              <li class='link-top'>Company</li>
              <li><a href="<?php echo home_url(); ?>">Home</a></li>
              <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
              <li><a href="<?php echo home_url(); ?>/about">About</a></li>
              <li><a href="<?php echo home_url(); ?>/what-we-offer">What We Offer</a></li>
            </ul>
            <ul class='site-nav footer-links'>
              <li class='link-top'>Services</li>
              <li><a href="#">Fitness</a></li>
              <li><a href="#">Counseling</a></li>
              <li><a href="#">Health & Nutrition</a></li>
              <li><a href="#">Corporate Wellness</a></li>
            </ul>
            <ul class='site-nav footer-links'>
              <li class='link-top'>Events</li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Wellness Retreats</a></li>
              <li><a href="#">Workshops & Talks</a></li>
            </ul>
            <div class="clear"></div>
          </nav>
          <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
        </div>
      </footer>
    </div>
    <?php // all js scripts are loaded in library/mergehealth.php ?>
    <?php wp_footer(); ?>
  </body>
</html>
