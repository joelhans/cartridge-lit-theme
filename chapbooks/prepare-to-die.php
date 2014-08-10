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

      <img class="respawn-campfire" src="<?php echo $chap_path; ?>toc.jpg" />

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

  <?php if ( have_posts() ) : while (have_posts()) : the_post(); global $post; ?>

  <section id="<?php echo $post->post_name; ?>" class="prepare-content">
  <div class="container">

    <article class="<?php echo $post->post_name; ?>">

      <?php the_content(); ?>

      <?php if ( $post->post_name == "my-shoulders-curve-like-elbows-in-a-nutshell-encasement" ) : ?>
        <img data-stellar-ratio="1.4" data-stellar-vertical-offset="500" src="<?php echo $chap_path; ?>my-shoulders-curve-like-elbows-in-a-nutshell-encasement.png" />
      <?php endif; ?>

      <?php if ( $post->post_name == "now-a-note-on-the-world-economy" ) : ?>
        <!-- NOW A NOTE ON THE WORLD ECONOMY -->
        <img class="soul-1-1" data-stellar-ratio="2.021" data-stellar-vertical-offset="300" src="<?php echo $chap_path; ?>soul_1.png" />
        <img class="soul-1-2" data-stellar-ratio="2.7" data-stellar-vertical-offset="800" src="<?php echo $chap_path; ?>soul_1.png" />
        <img class="soul-1-3" data-stellar-ratio="2.081" data-stellar-vertical-offset="-400" src="<?php echo $chap_path; ?>soul_1.png" />
        <img class="soul-1-4" data-stellar-ratio="1.247" data-stellar-vertical-offset="-400" src="<?php echo $chap_path; ?>soul_1.png" />
        <img class="soul-1-5" data-stellar-ratio="4.917" data-stellar-vertical-offset="0" src="<?php echo $chap_path; ?>soul_1.png" />
        <img class="soul-1-6" data-stellar-ratio="3.957" data-stellar-vertical-offset="0" src="<?php echo $chap_path; ?>soul_1.png" />
        <img class="soul-2-1" data-stellar-ratio="2.1763" data-stellar-vertical-offset="0" src="<?php echo $chap_path; ?>soul_2.png" />
        <img class="soul-2-2" data-stellar-ratio="4.371" data-stellar-vertical-offset="1000" src="<?php echo $chap_path; ?>soul_2.png" />
        <img class="soul-3-1" data-stellar-ratio="4.182" data-stellar-vertical-offset="0" src="<?php echo $chap_path; ?>soul_3.png" />
        <img class="soul-4-1" data-stellar-ratio="1.976" src="<?php echo $chap_path; ?>soul_4.png" />
        <img class="soul-4-2" data-stellar-ratio="1.127" src="<?php echo $chap_path; ?>soul_4.png" />
        <img class="soul-4-3" data-stellar-ratio="1.236" data-stellar-vertical-offset="-2000" src="<?php echo $chap_path; ?>soul_4.png" />
        <img class="soul-5-1" data-stellar-ratio="5.121" data-stellar-vertical-offset="400" src="<?php echo $chap_path; ?>soul_5.png" />
      <?php endif; ?>

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
