<?php
/**
 * Template Name: Issues/February 2018
 */

get_header(); ?>

<section class="issues2018-february">

  <section class="issue-header">
    <h1>The <em>???</em> Temple Issue</h1>
    <h2>February 14, 2018</h2>
  </section>

  <?php
  $args = array(
    'post_type'   => 'post',
    'posts_per_page' => 15,
    'meta_value'    => 'next-gen'
  );
  $the_query = new WP_Query( $args );
  ?>

  <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article class="issue-piece">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="issue-piece-meta"> by <?php echo get_post_meta($post->ID, 'writer', true); ?><span class="issue-piece-genre"><?php the_category(', '); ?></span></p>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</section>

<?php get_footer(); ?>
