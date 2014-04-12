<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <?php if ( have_posts() ): ?>

  <section class="archives">
    <?php if ( is_category() ): ?>
    <h1><?php single_cat_title(); ?></h1>
    <?php elseif ( is_tag() ): ?>
    <h1><?php single_cat_title(); ?></h1>
    <?php elseif ( is_year() ): ?>
    <h1><?php echo get_the_date ( 'Y' ); ?></h1>
    <?php elseif ( is_month() ): ?>
    <h1><?php echo get_the_date ( 'F, Y' ); ?></h1>
    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="nine-stack post-airship">
      <a class="image" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?> 
      </a>

      <div class="meta">

        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

        <div class="entry-cats">
          <?php echo get_the_category_list('&nbsp;'); ?>
        </div>

        <div class="entry-tags">
          <?php echo get_the_tag_list(); ?>
        </div>

        <?php the_excerpt(); ?> 

      </div>
    </article>

    <?php endwhile; ?>

  </section>

  <?php get_sidebar(); ?>

  <?php else: ?>
    <h1>Sorry, there's nothing here... yet. We're working on it.</h1>
  <?php endif; ?>

<?php get_footer(); ?>
