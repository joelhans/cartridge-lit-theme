<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <section class="work">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      
      <?php if ( get_post_meta( $post->ID, 'writer', 'true' ) ): ?>
      <h2><?php echo get_post_meta( $post->ID, 'writer', true); ?></h2>
      <?php elseif ( has_category( 'announcements' ) ): ?>
      <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
      <?php endif; ?>

      <?php the_content(); ?> 

      <?php if ( get_post_meta( $post->ID, 'bio', 'true' ) ): ?>
      <aside class="work-bio">
        <?php echo get_post_meta( $post->ID, 'bio', true); ?>
      </aside>
      <?php endif; ?>      

    </article>

    <?php endwhile; ?>
    <?php endif; ?>

  </section>

<?php get_footer(); ?>
