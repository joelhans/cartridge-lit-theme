<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php if ( has_category( 'airship' ) ): ?> 
  <article id="post-<?php the_ID(); ?>" class="airship-full">
  <?php else: ?>
  <article id="post-<?php the_ID(); ?>" class="work-full">
  <?php endif; ?>

    <?php if ( has_post_thumbnail() ): ?>
    <div class="entry-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">
    <?php else : ?>
    <div class="entry-header">
    <?php endif; ?>
      
      <div class="entry-bg"></div>

      <div class="meta">

        <h1 class="entry-title entry-title-large"><?php the_title(); ?></h1>
    
        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2 class="entry-author entry-author-large"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time class="entry-time entry-time-large" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

        <div class="entry-cats entry-cats-large">
          <?php echo get_the_category_list('&nbsp;'); ?>
        </div>

        <div class="entry-tags entry-cats-large">
          <?php echo get_the_tag_list(); ?>
        </div>

      </div>

    </div>

    <div class="entry-content">
      <?php the_content(); ?> 
    </div>

    <?php if ( get_post_meta( $post->ID, 'bio', 'true' ) ): ?>
    <aside class="work-bio">
      <?php echo get_post_meta( $post->ID, 'bio', true); ?>
    </aside>
    <?php endif; ?>      

  </article>

  <?php if ( has_category( 'airship' ) ): get_sidebar(); endif; ?>

  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
