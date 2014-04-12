<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
  <article id="post-<?php the_ID(); ?>" class="post-full">

    <?php if ( has_post_thumbnail() ): ?>
    <div class="entry-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">
    <?php else : ?>
    <div class="entry-header">
    <?php endif; ?>
      
      <div class="entry-bg">

        <h1 class="entry-title"><?php the_title(); ?></h1>
    
        <?php if ( get_post_meta( $post->ID, 'writer', 'true' ) ): ?>
        <h2><?php echo get_post_meta( $post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

        <div class="entry-cats">
          <?php echo get_the_category_list('&nbsp;'); ?>
        </div>

        <div class="entry-tags">
          <?php echo get_the_tag_list(); ?>
        </div>

      </div>

    </div>

    <?php the_content(); ?> 

    <?php if ( get_post_meta( $post->ID, 'bio', 'true' ) ): ?>
    <aside class="work-bio">
      <?php echo get_post_meta( $post->ID, 'bio', true); ?>
    </aside>
    <?php endif; ?>      

  </article>

  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
