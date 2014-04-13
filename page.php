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

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
  <article id="post-<?php the_ID(); ?>" class="post-full page-full">

    <?php if ( has_post_thumbnail() ): ?>
    <div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">
    <?php else : ?>
    <div class="page-header">
    <?php endif; ?>
      
      <div class="entry-bg">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>

    </div>

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

    <?php else: ?>

    <?php the_content(); ?> 

    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'bio', 'true' ) ): ?>
    <aside class="work-bio">
      <?php echo get_post_meta( $post->ID, 'bio', true); ?>
    </aside>
    <?php endif; ?>      

  </article>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
