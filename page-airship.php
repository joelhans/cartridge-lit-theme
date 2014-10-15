<?php
/**
 * Template Name: Airship
 */

get_header(); ?>

  <section class="airship page-full">

    <?php if ( has_post_thumbnail() ): ?>
    <div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);">
    <?php else : ?>
    <div class="page-header airship-header">
    <?php endif; ?>

      <div class="entry-bg"></div>

      <div class="meta">
        <h1 class="airship-title entry-title entry-title-large">The Airship</h1>
        <p class="airship-desc">(The <em>Cartridge Lit</em> blog.)</p>
      </div>

    </div>

    <?php
    $offset = 3+ ($paged -2)*5;
    $args = array('
      posts_per_page' => 5,
      'paged' => $paged,
      'category_name' => 'airship',
      'offset' => $offset
      );
    query_posts($args);
    ?>

    <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="nine-stack post-airship">

      <a class="image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);"></a>

      <div class="meta">

        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2 class="entry-author"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time class="entry-time" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

        <?php the_excerpt(); ?>

      </div>
    </article>

    <?php endwhile; ?>
    <!-- pagination -->
    <div class="nav-newer">
      <?php echo get_previous_posts_link( '« Newer entries' ); ?>
    </div>
    <div class="nav-older">
      <?php echo get_next_posts_link( 'Older entries »' ); ?>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <!-- No posts found -->
    <?php endif; ?>
  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
