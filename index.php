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

      <?php
        $args = array ( 
          'numberposts' => 5,
          'category_name' => 'fiction,poetry,non-fiction'
        );
        $theposts = get_posts( $args );
?>

      <?php if( !$theposts ): ?>

        <h1 class="launch-header">null. null. literature pending.</h1>
        <p class="launch-pp"><em>Cartridge Lit</em> is launching May 5. We are allocating bytes and converting pixels into games literature to feed them directly into your brains. Get ready.</p>

      <?php else: ?>
      <?php
        foreach( $theposts as $post) :
        setup_postdata($post);
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php the_excerpt(); ?> 
      </article>

      <?php
        endforeach;
        wp_reset_postdata();
      ?>
      
      <section class="featured-read-more">
        Read more:&nbsp;
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Fiction' ) ) ) ?>">Fiction</a>
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Poetry' ) ) ) ?>">Poetry</a>
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Non-Fiction' ) ) ) ?>">Non-fiction</a>
      </section>

      <?php endif; ?>

    </section>
    <!-- STORIES -->

    <!-- FROM THE AIRSHIP -->
    <section class="from-the-airship">

      <aside class="airship-banner">
        <h1>From the Airship:</h1>
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/airship.png" />
      </aside>

      <!-- ANNOUNCEMENTS -->
     <section class="announcement"> 

        <?php
          $args = array ( 
            'numberposts' => 1,
            'category_name' => 'featured'
          );
          $theposts = get_posts( $args );

          foreach( $theposts as $post) :
          setup_postdata($post);
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
          <?php the_content(); ?> 
        </article>

        <?php
          endforeach;
          wp_reset_postdata();
        ?>

        <section class="featured-read-more">
          <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Airship' ) ) ) ?>">Read more from the Airship.</a>
        </section>

      </section>
      <!-- ANNOUNCEMENTS -->

      <!-- OTHER BLOGS -->
      <section class="blog-list">
        
        <?php
          $args = array ( 
            'numberposts' => 5,
            'category_name' => 'airship,blog,uncategorized'
          );
          $theposts = get_posts( $args );

          foreach( $theposts as $post) :
          setup_postdata($post);
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 
          <aside><?php echo get_the_tag_list(); ?></aside>
        </article>
       
        <?php
          endforeach;
          wp_reset_postdata();
        ?>

      </section>

    </section>
    <!-- FROM THE AIRSHIP -->

    <!-- ARCHIVES -->
    

<?php wp_reset_query(); ?>
<?php get_footer(); ?>
