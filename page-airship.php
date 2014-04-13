<?php
/**
 * Template Name: Airship
 */

get_header(); ?>

  <section class="airship page-full">

    <div class="page-header airship-header">
      <div class="entry-bg">
        <h1 class="airship-title">The Airship</h1>
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
      <a class="image" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?> 
      </a>

      <div class="meta">

        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

        <div class="entry-tags">
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
