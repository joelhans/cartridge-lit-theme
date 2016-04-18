<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" class="page-full">

    <div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">

      <div class="entry-bg"></div>

      <div class="meta">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php if ( is_page( 'About' ) ): ?>
        <p class="airship-desc">(Video games literature? What's that?)</p>
        <?php elseif ( is_page( 'Submissions' ) ): ?>
        <p class="airship-desc">(The kind of pixels that we want.)</p>
        <?php elseif ( is_page( 'Contributors' ) ): ?>
        <p class="airship-desc">(The wonderful talents who have given us marvelous pixels.)</p>
        <?php elseif ( is_page( 'Masthead' ) ): ?>
        <p class="airship-desc">(The people who are trying to make this crazy thing real.)</p>
        <?php elseif ( is_page( 'Chapbooks' ) ): ?>
        <p class="airship-desc">(Because why stop with one story or a handful of poems?)</p>
        <?php endif; ?>
      </div>

    </div>

    <?php if ( is_page( 'masthead' ) ): ?>

    <div class="masthead-editor">
      <div class="masthead-images">
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/jd.jpg" />
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/jd_pixel.png" />
      </div>
      <div class="masthead-bio">
        <p>
          <?php echo get_post_meta( $post->ID, 'justin-bio', true); ?>
          <a class="masthead-twitter" href="https://twitter.com/JDaugherty1081">@JDaugherty1081</a>
        </p>
      </div>
    </div>

    <div class="masthead-editor">
      <div class="masthead-images">
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/hans.jpg" />
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/hans_pixel.jpg" />
      </div>
      <div class="masthead-bio">
        <p>
          <?php echo get_post_meta( $post->ID, 'joel-bio', true); ?>
          <a class="masthead-twitter" href="http://twitter.com/joelhans">@joelhans</a>
        </p>
      </div>
    </div>

    <div class="masthead-editor">
      <div class="masthead-images">
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/balaskovits.jpg" />
        <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/balaskovits_pixel.jpg" />
      </div>
      <div class="masthead-bio">
        <p>
          <?php echo get_post_meta( $post->ID, 'alison-bio', true); ?>
          <a class="masthead-twitter" href="https://twitter.com/AABalaskovits">@AABalaskovits</a>
        </p>
      </div>
    </div>

    <?php else: ?>

    <?php the_content(); ?>

    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'bio', 'true' ) ): ?>
    <aside class="work-bio">
      <?php echo get_post_meta( $post->ID, 'bio', true); ?>
    </aside>
    <?php endif; ?>

  </article>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
