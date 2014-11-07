<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartridge Lit
 */

get_header(); ?>

    <section class="featured-work">

    <!-- ************************
        STICKY + CHAP TEASER
    ************************* -->
    <?php
      $args = array(
      	'posts_per_page' => 1,
      	'post__in'  => get_option( 'sticky_posts' ),
        'orderby' => 'date'
      );
      $query = new WP_Query( $args );
      $query->the_post();
      $ids = array();
      $ids[] = get_the_ID();
    ?>

    <section id="post-<?php the_ID(); ?>" class="button-link featured-first" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">

      <a href="<?php the_permalink(); ?>" class="full-link"></a>

      <div class="entry-bg"></div>

      <div class="meta">

        <!-- <aside><?php $category = get_the_category(); echo $category[0]->cat_name; ?></aside> -->
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

      </div>

      <div class="excerpt">
        <?php the_excerpt(); ?>
      </div>

    </section>

    <section class="button-link chap-announce" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/chapbooks/prepare-to-die/front_page_teaser.jpg"; ?>');">

      <a href="<?php echo esc_url( home_url( '/prepare-to-die/' ) ); ?>" class="full-link"></a>

    </section>

    <?php wp_reset_postdata(); ?>

    <!-- ************************
        RECENT WORK
    ************************* -->
    <?php
      $args = array(
        'posts_per_page' => 2,
        'category_name' => 'fiction,poetry,non-fiction',
        'post__not_in' => $ids
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) : $query->the_post();
      $ids[] = get_the_ID();
    ?>

    <section id="post-<?php the_ID(); ?>" class="button-link" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">

      <a href="<?php the_permalink(); ?>" class="full-link"></a>

      <div class="entry-bg"></div>

      <div class="meta">

        <!-- <aside><?php $category = get_the_category(); echo $category[0]->cat_name; ?></aside> -->
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

      </div>

      <div class="excerpt">
        <?php the_excerpt(); ?>
      </div>

    </section>

    <?php endwhile; wp_reset_postdata(); ?>

    <!-- ************************
        FEATURED READ MORE
    ************************* -->
    <section class="featured-read-more">
      Read more:&nbsp;
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Fiction' ) ) ) ?>">Fiction</a>
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Poetry' ) ) ) ?>">Poetry</a>
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Non-Fiction' ) ) ) ?>">Non-fiction</a>
    </section>

    <!-- ************************
        SECOND RECENT WORK
    ************************* -->
    <?php
      $args = array(
        'posts_per_page' => 8,
        'category_name' => 'fiction',
        'post__not_in' => $ids
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) : $query->the_post();
      $ids[] = get_the_ID();
    ?>

    <?php if( $query->current_post == 0 && !is_paged() ): ?>
    <section class="recent-fiction-half">

      <section id="post-<?php the_ID(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">

        <a href="<?php the_permalink(); ?>" class="full-link"></a>

      </section>

      <div class="meta">

        <!-- <aside><?php $category = get_the_category(); echo $category[0]->cat_name; ?></aside> -->
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

      </div>

      <div class="excerpt">
        <?php the_excerpt(); ?>
      </div>

    </section>
    <?php endif; ?>

    <?php endwhile; wp_reset_postdata(); ?>

    <!-- ************************
        FIRST AIRSHIP LOOP
    ************************* -->

    <section class="airship-banner">
      <h1>From the Airship:</h1>
      <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/airship.png" />
    </section>

    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 6,
        'category_name' => 'airship',
        'paged' => $paged,
        'post__not_in' => $ids
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) : $query->the_post();
    ?>

    <section id="post-<?php the_ID(); ?>" class="button-link featured-third" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">

      <a href="<?php the_permalink(); ?>" class="full-link"></a>

      <div class="entry-bg"></div>

      <div class="meta">

        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

      </div>

      <div class="excerpt">
        <?php the_excerpt(); ?>
      </div>

    </section>

    <!-- <section id="post-<?php the_ID(); ?>" class="featured-post featured-airship">
      <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
      <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
      <?php endif; ?>
      <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
      <?php the_excerpt(); ?>
    </section> -->

    <?php endwhile; ?>
    <div class="pagination">
      <div class="nav-older"><a href="the-airship/">Hop board the Airship »</a></div>
    </div>
    <?php wp_reset_postdata(); ?>

    </section>
    <!-- FEATURED -->

<?php get_footer(); ?>
