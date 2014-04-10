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

      <?php
        $dir = get_bloginfo( 'template_directory' );
        $imgdir = '/img/posts/';
        $file = basename( get_permalink() );
        $extpng = '.png';
        $extjpg = '.jpg';

        $full_path_png = $dir . $imgdir . $file . $extpng; 
        $full_path_jpg = $dir . $imgdir . $file . $extjpg;
      ?>

      <?php if ( @getimagesize($full_path_png) ): ?>
      <div class="entry-header" style="background-image: url(<? echo $full_path_png; ?>);">
      <?php elseif ( @getimagesize($full_path_jpg) ): ?>
      <div class="entry-header" style="background-image: url(<? echo $full_path_jpg; ?>);">
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
