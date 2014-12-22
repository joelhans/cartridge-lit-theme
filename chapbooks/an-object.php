<?php
/**
 * Template Name: Chapbook/An Object You Cannot Lose
 */

get_template_part( 'chapbooks/chapbook', 'header' ); ?>

<?php

  global $post;
  $chap_path = get_template_directory_uri();
  $chap_slug = $post->post_name;

  $image_path = $chap_path."/assets/images/chapbooks/an-object/";
  $style_path = $chap_path."/assets/stylesheets/build/chapbooks/an-object/";
  $javas_path = $chap_path."/assets/javascripts/build/chapbooks/an-object/";

?>

<link rel="stylesheet" href="<?php echo $style_path; ?>an-object.min.css">

<script src="<?php bloginfo( 'template_directory' ); ?>/assets/javascripts/build/script.min.js"></script>
<script src="<?php echo $javas_path; ?>an-object.js"></script>

</head>

<body <?php body_class(); ?>>

  <!---------------------->
  <!-- FRONT MATTER     -->
  <!---------------------->

  <section class="front-matter">

  <!-- hover box -->
  <div class="fm-hover-box"></div>

  <!-- create/delete -->
  <section class="fm-create-delete fm-showing">
    <p class="fm-option fm-create">Create a new adventure log.</p>
    <p class="fm-delete fm-option-noselect">Delete a new adventure log.</p>
  </section>

  <!-- keyboard -->
  <section class="fm-keyboard">
    <p class="fm-textarea"></p>
    <p class="fm-enter-name">Enter a name.</p>
    <ul class="fm-keyboard-keys-uppercase">
      <li>A</li><li>B</li><li>C</li><li>D</li><li>E</li><li>F</li><li>G</li><li>H</li>
      <li>I</li><li>J</li><li>K</li><li>L</li><li>M</li><li>N</li><li>O</li><li>P</li>
      <li>Q</li><li>R</li><li>S</li><li>T</li><li>U</li><li>V</li><li>W</li><li>X</li>
      <li>Y</li><li>Z</li>
    </ul>
    <ul class="fm-keyboard-keys-lowercase">
      <li>a</li><li>b</li><li>c</li><li>d</li><li>e</li><li>f</li><li>g</li><li>h</li>
      <li>i</li><li>j</li><li>k</li><li>l</li><li>m</li><li>n</li><li>o</li><li>p</li>
      <li>q</li><li>r</li><li>s</li><li>t</li><li>u</li><li>v</li><li>w</li><li>x</li>
      <li>y</li><li>z</li>
    </ul>
    <ul class="fm-keyboard-options">
      <li class="fm-option fm-keyboard-back">Back</li><li class="fm-option fm-keyboard-end">End</li>
  </section>

  <!-- creating -->
  <section class="fm-creating">
    <p>Welcome, <span class="fm-player-name"></span>.</p>
    <p>Creating adventure log<span class="fm-ellipsis"><span></p>
    <p>Do not turn power OFF or remove game card!</p>
  </section>

  <!-- title -->
  <section class="fm-title">
    <h1>An Object You Cannot Lose</h1>
    <h2>by Sam Martone</h2>
  </section>

  </section>

  <!---------------------->
  <!-- CONTENT          -->
  <!---------------------->

  <section class="content">

  <section class="container">
    <article class="story">
      <h1>Open Water</h1>
      <p>Open your eyes: it begins with you, with your awakening. You should know this by now, after all the times begun before this beginning. After you wake, check the dresser drawers. Break every pot and barrel in every room. You might find something. You do find something, some things: medicine you’ll need, seeds to plant on your tongue, clothing that some unseen force does not allow you to wear. There are bookshelves next to each dresser—check those, too, even though you are too young yet to read these heavy tomes, their gilded pages. In one room, find your father. He has a distant look in his eyes when he speaks to you. He does not yet realize what has begun, with this, your awakening, this one day. Things began for him long before this beginning. It’s different, this time, too: when you leave that comfortable space you and your father share, you find you are not in a house in a small, inconsequential village in some corner of the continent, waiting to be discovered, nor are you a subject in a powerful kingdom, the son of his majesty’s most trusted soldier, training to begin your quest. You are on a ship, which is on an ocean. You are going home, with no memory of home in tow. Open the inventory of your mind and reach in elbow deep. You scratch at your arm, a phantom memory of bug bites and muggy summers. A former home, maybe, or a home you dreamed up.</p>
    </article>
  </section>

  <div class="tease-date">
    <h1>Arriving January 26th, 2015.</h2>
    <div class="phoenix-down">
      <img src="http://cartridgelit.com/wp-content/themes/cartridge-lit/assets/images/phoenix_down_vert.png">
    </div>
    <h2><a href="//cartridgelit.com">Cartridge Lit</a></h2>
  </div>

  <div class="story-mask"></div>

  </section>

  <!---------------------->
  <!-- STORY MASK       -->
  <!---------------------->



<?php get_template_part( 'chapbooks/chapbook', 'footer' ); ?>
