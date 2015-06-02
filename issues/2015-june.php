<?php
/**
 * Template Name: Issues/June 2015
 */

get_header(); ?>

<section class="issue-2015june">

  <section class="issue-header">
    <h1>The <em>Where in the World is Carmen Sandiego</em> Temple Issue</h1>
    <h2>June 3, 2015</h2>
  </section>

  <?php
  $args = array(
    'post_type'   => 'post',
    'meta_value'    => 'issue-one',
    'post_status' => 'future'
  );
  $the_query = new WP_Query( $args );
  ?>

  <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article class="issue-piece">
        <h1 class="issue-piece-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <p class="issue-piece-author"><?php echo get_post_meta($post->ID, 'writer', true); ?></p>
        <p class="issue-piece-genre"><?php the_category(', '); ?></p>
        <p class="issue-piece-excerpt">
          <?php echo get_post_meta($post->ID, 'issue-tease', true); ?>
          <a class="issue-piece-read" href="<?php the_permalink(); ?>">Read</a>
        </p>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</section>

<?php get_footer(); ?>
