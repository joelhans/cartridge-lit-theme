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

    <div class="entry-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);"></div>

    <div class="entry-content">
      <h1 class="entry-title"><?php the_title(); ?></h1>

      <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
      <h2 class="entry-author entry-author-large"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
      <?php endif; ?>

      <time class="entry-time entry-time-large" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

      <?php the_content(); ?>
    </div>

    <?php if ( get_post_meta( $post->ID, 'bio', 'true' ) ): ?>
    <aside class="work-bio">
      <?php echo get_post_meta( $post->ID, 'bio', true); ?>
    </aside>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'issue', 'true' ) ): ?>
    <aside class="issue-back">
      <a href="<?php echo esc_url( home_url( get_post_meta( $post->ID, 'issue', true) ) ); ?>">
        &larr; Back to the issue.
      </a>
    </aside>
    <?php endif; ?>

  </article>

  <?php if ( has_category( 'airship' ) ): get_sidebar(); endif; ?>

  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
