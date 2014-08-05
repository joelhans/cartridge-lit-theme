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
        <p class="launch-pp"><em>Cartridge Lit</em> is launching with video game literature May 5. We are allocating bytes and converting pixels into words that will be fed directly into your brains. Get ready.</p>
        <p class="launch-pp">Until then, check out what we&rsquo;re <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" >all about</a>, read <a href="#airship">our blog</a>, and then <a href="<?php echo esc_url( home_url( '/submissions/' ) ); ?>" rel="home">submit</a>.

      <?php
        else:
        foreach( $theposts as $post) :
        setup_postdata($post);
      ?>

      <section id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">

        <a href="<?php the_permalink(); ?>" class="featured-full-link"></a>

        <div class="entry-bg"></div>

        <div class="meta">

          <h1 class="entry-title entry-title-large"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <h2 class="entry-author entry-author-large"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
          <time class="entry-time entry-time-large" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

          <div class="entry-cats entry-cats-large">
            <?php echo get_the_category_list('&nbsp;'); ?>
          </div>
        </div>

        <div class="excerpt">
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
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/airship.png" />
      </aside>

      <!-- PRIMARY LOOP -->

      <section class="airship-loop">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('
          posts_per_page' => 5,
          'paged' => $paged,
          'category_name' => 'airship'
          );
        query_posts($args);
        ?>

        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="nine-stack post-airship">

          <a class="image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);"></a>

          <div class="meta">

            <h1 class="entry-title entry-title-small"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
            <h2 class="entry-author entry-author-small"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
            <?php endif; ?>
            <time class="entry-time entry-time-small" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

            <div class="entry-tags entry-tags-small">
              <?php echo get_the_tag_list(); ?>
            </div>

            <?php the_excerpt(); ?>

          </div>
        </article>

        <?php endwhile; ?>
        <!-- pagination -->
        <div class="nav-older"><a href="the-airship/page/2/">Older entries »</a></div>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <!-- No posts found -->
        <?php endif; ?>

      </section>

      <?php get_sidebar(); ?>

    </section>
    <!-- FROM THE AIRSHIP -->

<?php wp_reset_query(); ?>
<?php get_footer(); ?>
