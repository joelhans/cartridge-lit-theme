<?php
/**
 * Template Name: Issues/July 2017 (Next Gen)
 */

get_header(); ?>

<section class="issue2016-january">

  <section class="issue-header">
    <h1>The <em>Next Gen</em> Temple Issue</h1>
    <h2>July 11, 2017</h2>
  </section>

  <?php
  $args = array(
    'post_type'   => 'post',
    'posts_per_page' => 10,
    'meta_value'    => 'next-gen'
  );
  $the_query = new WP_Query( $args );
  ?>

  <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article class="issue-piece">
        <h1 class="issue-piece-title">
          <a href="<?php the_permalink(); ?>">
            <?php echo get_post_meta($post->ID, 'issue-tease', true); ?>
          </a>
        </h1>
        <p class="issue-piece-meta">"<?php the_title(); ?>" by <?php echo get_post_meta($post->ID, 'writer', true); ?></p>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</section>

<?php get_footer(); ?>
