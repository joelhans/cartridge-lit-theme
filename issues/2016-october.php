<?php
/**
 * Template Name: Issues/October 2016
 */

get_header(); ?>

<section class="issue2016-january">

  <section class="issue-header">
    <h1>The <em>Unforseen Consequences</em> Temple Issue</h1>
    <h2>October 10, 2016</h2>
  </section>

  <article class="issue-piece">
    <h1 class="issue-piece-title">
      <a href="http://cartridgelit.com/2016/10/10/justin-joel-goodbye/">
        GOODBYE TEASE GOES HERE.
      </a>
    </h1>
    <p class="issue-piece-meta">"GOODBYE TITLE GOES HERE" by <?php echo get_post_meta($post->ID, 'writer', true); ?></p>
  </article>

  <?php
  $args = array(
    'post_type'   => 'post',
    'posts_per_page' => 15,
    'meta_value'    => 'consequences'
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
