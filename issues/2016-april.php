<?php
/**
 * Template Name: Issues/April 2016
 */

get_header(); ?>

<section class="issue2016-april">

  <section class="issue-header">
    <h1>The <em>Solstice</em> Temple Issue</h1>
    <h2>April 27, 2016</h2>
  </section>

  <?php
  $args = array(
    'post_type'   => 'post',
    'posts_per_page' => 15,
    'meta_value'    => 'solstice'
  );
  $the_query = new WP_Query( $args );
  ?>

  <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article class="issue-piece">
        <div>
          <h1 class="issue-piece-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h1>
          <p class="issue-piece-author"><?php echo get_post_meta($post->ID, 'writer', true); ?></p>
          <p class="issue-piece-genre"><?php the_category(', '); ?></p>
          <!-- <p class="issue-piece-excerpt">
            <?php echo get_post_meta($post->ID, 'issue-tease', true); ?>
            <a class="issue-piece-read" href="<?php the_permalink(); ?>">Read</a>
          </p> -->
        </div>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</section>

<?php get_footer(); ?>
