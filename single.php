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

      <div class="entry-header" style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/img/posts/<?php echo basename( get_permalink() ); ?>.png);"> 
        
        <div>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      
          <?php if ( get_post_meta( $post->ID, 'writer', 'true' ) ): ?>
          <h2><?php echo get_post_meta( $post->ID, 'writer', true); ?></h2>
          <?php endif; ?>

          <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
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

  </section>

<?php get_footer(); ?>
