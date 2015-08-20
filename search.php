<?php get_header(); ?>

<div id="content">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all t-2of3 d-5of7 cf" role="main">
      <h1 class="archive-title"><span><?php _e( 'Search Results for:', 'mergehealth' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
        <header class="article-header">
          <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
          }
          ?>
          <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          <p class="byline entry-meta vcard">
            <?php printf( __( 'Posted', 'mergehealth' ).' %1$s %2$s',
              /* the time the post was published */
              '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
              /* the author of the post */
              '<span class="by">'.__( 'by', 'mergehealth').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta('nickname') ) . '</span>'
            ); ?>
          </p>
        </header>
        <footer class="article-footer cf">
          <?php printf( '<p class="footer-category">' . __('', 'mergehealth' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
          <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'mergehealth' ) . '</span> ', ', ', '</p>' ); ?>
        </footer>
      </article>
      <?php endwhile; ?>
      <?php mergehealth_page_navi(); ?>
      <?php else : ?>
      <article id="post-not-found" class="hentry cf">
        <header class="article-header">
          <h1><?php _e( 'Oops, Post Not Found!', 'mergehealth' ); ?></h1>
        </header>
        <footer class="article-footer">
          <p><?php _e( 'This is the error message in the index.php template.', 'mergehealth' ); ?></p>
        </footer>
      </article>
      <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
