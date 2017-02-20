<?php
/**
 * Template Name: Chapbook/please please
 */

get_template_part( 'chapbooks/chapbook', 'header' ); ?>

<?php
  global $post;
  $chap_path = get_template_directory_uri();
  $chap_slug = $post->post_name;

  $image_path = $chap_path."/assets/images/chapbooks/please-please/";
  $style_path = $chap_path."/assets/stylesheets/build/chapbooks/please-please/";
  $javas_path = $chap_path."/assets/javascripts/build/chapbooks/please-please/";
?>

<link rel="stylesheet" href="<?php echo $style_path; ?>please-please.min.css?v1.0">

<script src="<?php bloginfo( 'template_directory' ); ?>/assets/javascripts/build/script.min.js"></script>
<script src="<?php echo $javas_path; ?>please-please.js?v1.0"></script>

</head>

<body <?php body_class(); ?>>

  <section class="pp-title">
    <h1>please please get over here please</h1>
    <h2>Jamison Crabtree</h2>
  </section>

  <article class="pp-poem">
    <h1>Watch out the heart attacks</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>The medical arcades</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Beware I live, I hunger</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Modeling, geometrically</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>The Chase</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Healing potion</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>They meet</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>you can use a bullet to make a meat</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Junior</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Speak to the villagers</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Rend the feelings the heart with painful feelings</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>The empty room</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>All of time and space and the space outside of space where does it end</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>i break into my friends houses when they're gone</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>Please choose two other kids</h1>
    <p></p>
  </article>

  <article class="pp-poem">
    <h1>start over?</h1>
    <p></p>
  </article>

  <section class="pp-acknowledgments">
    <h1>Acknowledgments</h1>
    <p>All of time and space and the space outside of space where does it end takes its title from <em>Fez</em></p>
    <p>Beware, I live, I hunger takes its title from <em>Sinistar</em></p>
    <p>The Chase, They Meet, and Junior takes their titles from <em>Ms. Pacman</em></p>
    <p>The phrase "Get over here" is taken from <em>Mortal Kombat</em></p>
    <p>Please choose two other kids takes its title from <em>Maniac Mansion</em></p>
    <p>Rend the feelings the heart with painful feelings takes its title from <em>Rambo</em> (NES game)</p>
    <p>Watch out, the heart attacks takes its title from <em>Castlevania 2: Simon's Quest</em></p>
  </section>

</section>

<?php get_template_part( 'chapbooks/chapbook', 'footer' ); ?>
