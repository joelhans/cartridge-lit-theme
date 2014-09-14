<?php
/**
 * Template Name: Chapbook/Prepare to Die
 */

get_template_part( 'chapbooks/chapbook', 'header' ); ?>

<?php

  global $post;
  $chap_path = get_template_directory_uri();
  $chap_slug = $post->post_name;

  $image_path = $chap_path."/assets/images/chapbooks/prepare-to-die/";
  $style_path = $chap_path."/assets/stylesheets/build/chapbooks/prepare-to-die/";
  $javas_path = $chap_path."/assets/javascripts/build/chapbooks/prepare-to-die/";

?>

<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,500,500italic|Vollkorn:400italic,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $style_path; ?>prepare-to-die.min.css">

<script src="<?php bloginfo( 'template_directory' ); ?>/assets/javascripts/build/script.min.js"></script>
<script src="<?php echo $javas_path; ?>prepare-to-die.js"></script>

</head>

<body <?php body_class(); ?>>

  <!-- HEADER -->

  <nav>
    <div class="nav-title">
      <h1>Prepare to Die</h1>
      <h2>By Jess Jenkins</h2>
    </div>

    <div class="nav-toc">

      <span class="nav-menu"></span>
      <a href="#title">Title page</a>
      <a href="#table-of-contents">Table of contents</a>

      <?php $args = array('posts_per_page' => -1,'category_name' => 'prepare-to-die','orderby' => 'date','order' => 'ASC');
        query_posts($args);
        while (have_posts()) : the_post();
        global $post; ?>

      <a href="#<?php echo $post->post_name; ?>"><?php the_title(); ?></a>

      <?php endwhile; wp_reset_postdata(); ?>

      <a href="#acknowledgements">Acknowledgements</a>

    </div>

    <div class="nav-cartridge">

      <h2>Brought to you by <a href="//cartridgelit.com"><em>Cartridge Lit</em></a></h2>

    </div>

  </nav>

  <section class="prepare-header" id="title">

    <div class="ptd-header-prepare">

      <h1>Prepare</h1>

    </div>

    <div class="ptd-header-to">

      <h1>to</h1>
      <h2>A poetry chapbook by Jess Jenkins</h2>
      <h3>Brought to you by <a href="//cartridgelit.com" target="_blank"><em>Cartridge Lit</em></a></h3>

    </div>

    <div class="ptd-header-die">

      <h1>Die</h1>
      <svg>
        <defs>
        	<pattern id="bg" patternUnits="userSpaceOnUse" width="1000" height="711" >
        		<image xlink:href="<?php echo $image_path; ?>title-background.jpg" width="1000" height="711" />
        	</pattern>
        </defs>
        <text y="1.2em">09.16.2014</text>
      </svg>

    </div>

  </section>
  <!-- /HEADER -->

  <!-- TOC -->
  <?php
    $args = array(
      'posts_per_page' => -1,
      'category_name' => 'prepare-to-die',
      'orderby' => 'date',
      'order' => 'ASC'
      );
    query_posts($args);
  ?>

  <?php if ( have_posts() ) : ?>

  <section class="prepare-toc" id="table-of-contents">
  <div class="container">

    <div class="six">

      <h1>Table of Contents:</h1>

      <?php while (have_posts()) : the_post(); ?>

      <a href="#<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?></a>

      <?php endwhile; wp_reset_postdata(); ?>

    </div>

    <div class="six">

      <img class="respawn-campfire" src="<?php echo $image_path; ?>toc.jpg" />

    </div>

  </div>
  </section>

  <?php else : ?>
  <?php endif; ?>
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
        <img data-stellar-ratio="1.4" data-stellar-vertical-offset="-1200" src="<?php echo $image_path; ?>my-shoulders-curve-like-elbows-in-a-nutshell-encasement.png" />
      <?php endif; ?>

      <?php if ( $post->post_name == "the-cat-lives-behind" ) : ?>
        <img class="cat-1" src="<?php echo $image_path; ?>the-cat-lives-behind_1.jpg" />
        <img class="cat-2" src="<?php echo $image_path; ?>the-cat-lives-behind_2.jpg" />
      <?php endif; ?>

      <?php if ( $post->post_name == "now-a-note-on-the-world-economy" ) : ?>
        <!-- NOW A NOTE ON THE WORLD ECONOMY -->
        <img class="soul-1-1" data-stellar-ratio="2.021" data-stellar-vertical-offset="300" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-2" data-stellar-ratio="2.7" data-stellar-vertical-offset="800" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-3" data-stellar-ratio="2.081" data-stellar-vertical-offset="-400" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-4" data-stellar-ratio="1.247" data-stellar-vertical-offset="-400" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-5" data-stellar-ratio="4.917" data-stellar-vertical-offset="0" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-6" data-stellar-ratio="3.957" data-stellar-vertical-offset="0" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-7" data-stellar-ratio="1.086" data-stellar-vertical-offset="0" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-1-8" data-stellar-ratio="1.123" data-stellar-vertical-offset="0" src="<?php echo $image_path; ?>soul_1.png" />
        <img class="soul-2-1" data-stellar-ratio="2.1763" data-stellar-vertical-offset="0" src="<?php echo $image_path; ?>soul_2.png" />
        <img class="soul-2-2" data-stellar-ratio="4.371" data-stellar-vertical-offset="1000" src="<?php echo $image_path; ?>soul_2.png" />
        <img class="soul-3-1" data-stellar-ratio="4.182" data-stellar-vertical-offset="0" src="<?php echo $image_path; ?>soul_3.png" />
        <img class="soul-3-2" data-stellar-ratio="2.863" data-stellar-vertical-offset="-200" src="<?php echo $image_path; ?>soul_3.png" />
        <img class="soul-4-1" data-stellar-ratio="1.976" src="<?php echo $image_path; ?>soul_4.png" />
        <img class="soul-4-2" data-stellar-ratio="1.127" src="<?php echo $image_path; ?>soul_4.png" />
        <img class="soul-4-3" data-stellar-ratio="1.236" data-stellar-vertical-offset="-2000" src="<?php echo $image_path; ?>soul_4.png" />
        <img class="soul-5-1" data-stellar-ratio="5.121" data-stellar-vertical-offset="400" src="<?php echo $image_path; ?>soul_5.png" />
      <?php endif; ?>

    </article>

    <?php if ( $post->post_name == "he-is-willing-and-fervent-he-teases" ) : ?>
      <img class="bugzilla-1" src="<?php echo $image_path; ?>bugzilla_1.jpg" />
      <img class="bugzilla-2" src="<?php echo $image_path; ?>bugzilla_2.jpg" />
      <img class="bugzilla-3" src="<?php echo $image_path; ?>bugzilla_3.jpg" />
      <img class="bugzilla-4" src="<?php echo $image_path; ?>bugzilla_4.jpg" />
      <img class="bugzilla-5" src="<?php echo $image_path; ?>bugzilla_5.jpg" />
      <img class="bugzilla-6" src="<?php echo $image_path; ?>bugzilla_6.jpg" />
      <img class="bugzilla-7" src="<?php echo $image_path; ?>bugzilla_7.jpg" />
    <?php endif; ?>

  </div>

  <?php if ( $post->post_name == "you-must-also-have-a-mineral-nature" ) : ?>
    <img data-stellar-ratio="1.5" data-stellar-vertical-offset="-400" src="<?php echo $image_path; ?>you-must-also-have-a-mineral-nature-vert.jpg" />
  <?php endif; ?>

  <?php if ( $post->post_name == "here-the-frame-rate-chugs-processing-a-deep-black" ) : ?>
    <img src="<?php echo $image_path; ?>here-the-frame-rate-chugs-processing-a-deep-black.jpg" />
    <article class="here-replacement">
      <?php the_content(); ?>
    </article>
  <?php endif; ?>

  <?php if ( $post->post_name == "evil-does-not-work-like-a-network" ) : ?>
    <video class="evil-does-not-webm" muted>
      <source src="<?php echo $image_path; ?>evil-does-not-work-like-a-network.webm">
        <source src="<?php echo $image_path; ?>evil-does-not-work-like-a-network.ogg">
      <source src="<?php echo $image_path; ?>evil-does-not-work-like-a-network.mp4">
    </video>
  <?php endif; ?>

  </section>

  <?php endwhile; ?>
  <!-- pagination -->
  <?php wp_reset_postdata(); ?>
  <?php else : ?>
  <!-- No posts found -->
  <?php endif; ?>

  <!-- /LOOP -->

  <section id="acknowledgements">

    <div class="container">

      <h1>Prepare to Die</h1>
      <h2>A poetry chapbook by Jess Jenkins</h2>

      <div class="ack-left">

        <p>JESS JENKINS hails from Southern West Virginia via Iowa and currently lives and works in Chicago. She holds an MFA in poetry from the University of Arizona and was the winner of the 2013 UA Poetry Center Contest. Her works have appeared or are forthcoming in journals like <em>Jellyfish</em>, <em>Cloud Rodeo</em> and <em>Banango Street</em>. She also writes about, thinks about, plays and watches others play lots of games.</p>

        <p>The author gratefully acknowledges the journals in which this work has previously appeared:</p>
        <p><a href="http://sundoglit.com/jess-jenkins/"><em>Sundog Lit</em></a></p>

      </div>

      <div class="ack-right">

        <p>Jess Jenkins thanks:</p>

      </div>

      <div class="ack-center">

        <p>Web design/layout by <a href="//joelhans.com">Joel Hans</a>, co-editor, <a href="//cartridgelit.com"><em>Cartridge Lit</em></a>. He is extremely grateful for the opportunity to showcase such an amazing collection of poetry.</p>

        <p>All images (except "Who was the Magellan who cartographed this place") courtesy Duncan Harris and his website, <a href="http://deadendthrills.com/"><em>The Art of Gaming</em></a>. The art of this chapbook would not have been possible without his hard work and willingness to let others use the images he captured.</p>

      </div>

    </div>

    <img class="phoenix-down" src="http://cartridgelit.com/wp-content/themes/cartridge-lit/assets/images/phoenix_down_vert.png">

  </section>

<?php get_template_part( 'chapbooks/chapbook', 'footer' ); ?>
