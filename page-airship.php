<?php
/**
 * Template Name: Airship
 */

get_header(); ?>

  <section class="airship page-full">

    <div class="page-header airship-header">

      <div class="entry-bg"></div>

      <div class="meta">
        <h1 class="airship-title entry-title entry-title-large">The Airship</h1>
        <p class="airship-desc">(The <em>Cartridge Lit</em> blog.)</p>
      </div>

    </div>

    <?php
      $args = array (
        'category_name' => 'airship,blog,uncategorized'
      );
      $theposts = get_posts( $args );

      foreach( $theposts as $post) :
      setup_postdata($post);
    ?>

    <article id="post-<?php the_ID(); ?>" class="nine-stack post-airship">

      <a class="image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);"></a>

      <div class="meta">

        <h1 class="entry-title-small"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2 class="entry-author entry-author-small"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time class="entry-time entry-time-small" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>

        <div class="entry-tags entry-tags-small" class="entry-tags">
          <?php echo get_the_tag_list(); ?>
        </div>

        <?php the_excerpt(); ?>

      </div>
    </article>

    <?php
      endforeach;
      wp_reset_postdata();
    ?>
  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
