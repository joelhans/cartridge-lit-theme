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
    <section class="featured-work six-by-six">

      <?php
        $args = array ( 
          'numberposts' => 5,
          'category_name' => 'fiction,poetry,non-fiction'
        );
        $theposts = get_posts( $args );
      ?>

      <?php if( !$theposts ): ?>

        <h1 class="launch-header">null. null. literature pending.</h1>
        <p class="launch-pp"><em>Cartridge Lit</em> is launching with video game literature May 5. We are allocating bytes and converting pixels into words that will be fed directly into your brains. Get ready.</p>
        <p class="launch-pp">Until then, check out what we&rsquo;re <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" >all about</a>, read <a href="#airship">our blog</a>,and then <a href="<?php echo esc_url( home_url( '/submissions/' ) ); ?>" rel="home">submit</a>.

      <?php 
        else:
        foreach( $theposts as $post) :
        setup_postdata($post);
      ?>

      <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <a class="image" href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?> 
        </a>

        <div class="meta">

          <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>

          <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

          <div class="entry-cats">
            <?php echo get_the_category_list('&nbsp;'); ?>
          </div>

          <?php the_excerpt(); ?> 

        </div>
      </section>

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
    <section id="airship" class="from-the-airship">

      <aside class="airship-banner">
        <h1>From the Airship:</h1>
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/airship.png" />
      </aside>

      <!-- PRIMARY LOOP -->

      <section class="airship-loop">
        <?php
          $args = array ( 
            'numberposts' => 10,
            'category_name' => 'airship,uncategorized'
          );
          $theposts = get_posts( $args );
          foreach( $theposts as $post):
          setup_postdata($post);
        ?>

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

            <div class="entry-tags">
              <?php echo get_the_tag_list(); ?>
            </div>

            <?php the_excerpt(); ?> 

          </div>
        </article>

        <?php
          endforeach;
          wp_reset_postdata();
        ?>

        <a class="airship-read-more" href="<?php echo esc_url( get_category_link( get_cat_ID( 'Airship' ) ) ) ?>">Read more from the Airship.</a>

      </section>

      <?php get_sidebar(); ?>

    </section>
    <!-- FROM THE AIRSHIP -->

<?php wp_reset_query(); ?>
<?php get_footer(); ?>
