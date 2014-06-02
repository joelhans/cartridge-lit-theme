<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <section class="error-404">

    <h1>You seem to have taken the wrong turn.</h1> 
    <p>That seems to happen in dungeons, sometimes, doesn't it?</p>
    <p>Let's try to get you back on the right path.</p>
    <p>Try some of the navigation options to the right, the search form just below this, or one of the recent posts below that.</p>

    <?php get_search_form(); ?>

    <h2 class="error-404-recent">Recent posts:</h2>

    <?php
      $args = array ( 
        'numberposts' => 5
      );
      $theposts = get_posts( $args );
      foreach( $theposts as $post):
      setup_postdata($post);
    ?>

    <article id="post-<?php the_ID(); ?>" class="nine-stack post-airship">
      <a class="image" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?> 
      </a>

      <div class="meta">

        <h1 class="entry-title entry-title-small"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2 class="entry-author entry-author-small"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time class="entry-time entry-time-small" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

        <div class="entry-cats entry-cats-small">
          <?php echo get_the_category_list('&nbsp;'); ?>
        </div>

        <div class="entry-tags entry-tags-small">
          <?php echo get_the_tag_list(); ?>
        </div>

        <?php the_excerpt(); ?> 

      </div>
    </article>

    <?php
      endforeach;
      wp_reset_postdata();
    ?>

  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
