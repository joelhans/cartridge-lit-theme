<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartridge Lit
 */

get_header(); ?>

    <!-- STORIES -->
    <section class="featured-work">

      <?php query_posts($query_string . '&cat=-2&posts_per_page=3'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php the_excerpt(); ?> 
      </article>

      <?php endwhile; ?>
      <?php endif; ?>

      <section class="featured-read-more">
        Read more:&nbsp;
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Fiction' ) ) ) ?>">Fiction</a>
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Poetry' ) ) ) ?>">Poetry</a>
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Non-Fiction' ) ) ) ?>">Non-fiction</a>
      </section>

    </section>
    <!-- STORIES -->

    <!-- FROM THE AIRSHIP -->
    <section class="from-the-airship">

      <aside class="airship-banner">
        <h1>From the Airship:</h1>
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/airship.png" />
      </aside>

      <section class="announcement"> 
        <?php query_posts($query_string . '&cat=2&posts_per_page=1'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
          <?php the_content(); ?> 
        </article>

        <?php endwhile; ?>
        <?php endif; ?>
   
        <section class="featured-read-more">
          Read more:&nbsp;
          <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Announcements' ) ) ) ?>">Announcements</a>
        </section>

     </section>

    </section>
    <!-- ANNOUNCEMENTS -->

    <!-- ARCHIVES -->
    

<?php wp_reset_query(); ?>
<?php get_footer(); ?>
