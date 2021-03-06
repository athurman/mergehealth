
<?php
/*
* This is the default post format.
*
* So basically this is a regular post. if you don't want to use post formats,
* you can just copy ths stuff in here and replace the post format thing in
* single.php.
*
* The other formats are SUPER basic so you can style them as you like.
*
* Again, If you want to remove post formats, just delete the post-formats
* folder and replace the function below with the contents of the "format.php" file.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
  <header class="article-header entry-header">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail('full');
    }
    ?>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your share button code -->
    <div class="fb-share-button"
        data-href="<?php echo the_permalink(); ?>"
        data-layout="button_count">
    </div>
    <a href="https://twitter.com/share" class="twitter-share-button" data-via="MergeIntoHealth">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
    <p class="byline entry-meta vcard">
    <?php printf( __( 'Posted', 'mergehealth' ).' %1$s %2$s',
       /* the time the post was published */
       '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
       /* the author of the post */
       '<span class="by">'.__( 'by', 'mergehealth' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
    ); ?>
    </p>
  </header> <?php // end article header ?>
  <section class="entry-content cf" itemprop="articleBody">
    <?php
      // the content (pretty self explanatory huh)
      the_content();

      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mergehealth' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
      ) );
    ?>
  </section> <?php // end article section ?>
  <footer class="article-footer">
    <?php printf( __( 'filed under', 'mergehealth' ).': %1$s', get_the_category_list(', ') ); ?>
    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'mergehealth' ) . '</span> ', ', ', '</p>' ); ?>
  </footer> <?php // end article footer ?>
  <?php //comments_template(); ?>
</article> <?php // end article ?>
