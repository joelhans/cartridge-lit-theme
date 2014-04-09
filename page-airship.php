<?php
/**
 * Template Name: Airship
 */

get_header(); ?>

  <section class="airship">

    <h1 class="airship-title">The Airship</h1>
    <p class="airship-desc">(The <em>Cartridge Lit</em> blog.)</p>

    <section class="airship-content">
      <?php
        $args = array ( 
          'category_name' => 'airship,blog,uncategorized'
        );
        $theposts = get_posts( $args );

        foreach( $theposts as $post) :
        setup_postdata($post);
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
        <?php the_content(); ?>
        <aside><?php echo get_the_tag_list(); ?></aside>
      </article>
     
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </section>

    <section class="airship-sidebar">
      <?php wp_get_archives(); ?>
    </section>

  </section>

<?php get_footer(); ?>
