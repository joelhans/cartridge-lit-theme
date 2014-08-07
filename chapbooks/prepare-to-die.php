<?php
/**
 * Template Name: Chapbook/Prepare to Die
 */

get_template_part( 'chapbooks/chapbook', 'header' ); ?>

<?php

  $chap_path = get_template_directory_uri();
  $chap_path = $chap_path."/assets/images/chapbooks/prepare-to-die/"

?>

  <!-- HEADER -->
  <section class="prepare-header">
  <div class="container">

    <div class="twelve">

      <h1><?php the_title(); ?></h1>

      <h2>A poetry chapbook by Jess Jenkins</h2>
      <h3>Brought to you by <a href="//cartridgelit.com" target="_blank"><em>Cartridge Lit</em></a></h3>

    </div>

  </div>
  </section>
  <!-- /HEADER -->

  <!-- TOC -->
  <section class="prepare-toc">
  <div class="container">

    <div class="six">

      <h1>Table of Contents:</h1>

      <?php
        $args = array(
          'posts_per_page' => -1,
          'category_name' => 'prepare-to-die',
          'orderby' => 'date',
          'order' => 'ASC'
          );
        query_posts($args);
      ?>

      <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

      <a href="#<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?></a>

      <?php endwhile; ?>
      <!-- pagination -->
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <!-- No posts found -->
      <?php endif; ?>

    </div>

    <div class="six">

      <img class="respawn-campfire" src="<?php echo $chap_path; ?>toc.jpg"/>

    </div>

  </div>
  </section>
  <!-- /TOC -->

  <!-- LOOP -->

  <?php
    $args = array(
      'posts_per_page' => -1,
      'category_name' => 'prepare-to-die',
      'orderby' => 'date',
      'order' => 'ASC'
      );
    query_posts($args);
  ?>

  <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

  <section id="<?php global $post; echo $post->post_name; ?>" class="prepare-content">
  <div class="container">

    <article class="<?php global $post; echo $post->post_name; ?>">

      <?php the_content(); ?>

    </article>

  </div>
  </section>

  <?php endwhile; ?>
  <!-- pagination -->
  <?php wp_reset_postdata(); ?>
  <?php else : ?>
  <!-- No posts found -->
  <?php endif; ?>

  <!-- /LOOP -->

<?php get_template_part( 'chapbooks/chapbook', 'footer' ); ?>
