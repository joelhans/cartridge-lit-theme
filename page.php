<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <section class="pages">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="entry-title"><?php the_title(); ?></h1>

      <?php if ( is_page( 'masthead' ) ): ?>

      <div class="masthead-editor">

        <div class="masthead-images">

          <img src="<?php bloginfo( 'template_directory' ); ?>/img/jd.jpg" />
          <img src="<?php bloginfo( 'template_directory' ); ?>/img/jd_pixel.png" />

        </div>

        <p><?php echo get_post_meta( $post->ID, 'justin-bio', true); ?></p>

      </div>

      <div class="masthead-editor">

        <div class="masthead-images">

          <img src="<?php bloginfo( 'template_directory' ); ?>/img/jh.jpg" />
          <img src="<?php bloginfo( 'template_directory' ); ?>/img/jh_pixel.png" />

        </div>

        <p><?php echo get_post_meta( $post->ID, 'joel-bio', true); ?></p>

      </div>

      <?php else : ?>

      <?php the_content(); ?> 

      <?php endif; ?>

    </article>

    <?php endwhile; ?>
    <?php endif; ?>

  </section>

<?php get_footer(); ?>
