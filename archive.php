<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <section class="archives">

  <?php if ( have_posts() ): ?>

  <!-- CATEGORY ARCHIVES --> 
  <?php if ( is_category() ): ?>
    <section class="archive-category">
      <h1><?php single_cat_title(); ?></h1>

      <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta( $post->ID, 'writer', 'true' ) ): ?>
        <h2><?php echo get_post_meta( $post->ID, 'writer', true); ?></h2>
        <?php elseif ( has_category( 'announcements' ) ): ?>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
        <?php endif; ?>

        <?php the_excerpt(); ?> 

      </article>
      <?php endwhile; ?>

    </section>
  <!-- CATEGORY ARCHIVES -->

  <!-- YEARLY ARCHIVES -->
  <?php elseif ( is_year() ): ?>
    <section class="archive-year">
      <h1><?php echo get_the_date ( 'Y' ); ?></h1>

      <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta( $post->ID, 'writer', 'true' ) ): ?>
        <h2><?php echo get_post_meta( $post->ID, 'writer', true); ?></h2>
        <?php elseif ( has_category( 'announcements' ) ): ?>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
        <?php endif; ?>

        <?php the_excerpt(); ?> 

      </article>
      <?php endwhile; ?>

    </section>
  <!-- YEARLY ARCHIVES -->

  <!-- MONTHLY ARCHIVES -->
  <?php elseif ( is_month() ): ?>
    <section class="archive-month">
      <h1><?php echo get_the_date ( 'F, Y' ); ?></h1>

      <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta( $post->ID, 'writer', 'true' ) ): ?>
        <h2><?php echo get_post_meta( $post->ID, 'writer', true); ?></h2>
        <?php elseif ( has_category( 'announcements' ) ): ?>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
        <?php endif; ?>

        <?php the_excerpt(); ?> 

      </article>
      <?php endwhile; ?>

    </section>
  <!-- MONTHLY ARCHIVES -->

  <?php else: ?>
    <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; ?>
  <?php endif; ?>

  </section>

<?php get_footer(); ?>
