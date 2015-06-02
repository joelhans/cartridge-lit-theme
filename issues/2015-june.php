<?php
/**
 * Template Name: Issues/June 2015
 */

get_header(); ?>

<section class="issue-2015june">

  <?php
  // $args = array(
  //     'orderby' => 'title',
  //     'order' => 'ASC',
  //     'meta_query' => array(
  //         array(
  //             'key' => 'issue',
  //             'value' => '2015june',
  //             'compare' => 'LIKE'
  //         )
  //     )
  // );
  $args = array(
  	'meta_key'   => 'issue',
  	'meta_value' => '2015june'
  );
  $issue_query = new WP_Query( 'meta_value=2015june' );
  while ( $issue_query->have_posts() ) : $issue_query->the_post();
  ?>

  <article class="issue-piece">
    <h1>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php the_title(); ?>
      </a>
    </h1>
    <p class="issue-piece-author"><?php echo get_post_meta($post->ID, 'writer', true); ?></p>
    <p class="issue-piece-excerpt"><?php the_excerpt(); ?></p>
    <a class="issue-bottom" href="<?php echo esc_url( home_url( '/2015/06/03/mountain-simulator/' ) ); ?>">Read</a>
  </article>

  <?php endwhile; ?>

</section>
<!-- FEATURED -->

<?php get_footer(); ?>
