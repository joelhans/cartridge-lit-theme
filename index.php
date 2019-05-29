<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartridge Lit
 */

get_header(); ?>

<section class="post-featured">

  <!-- <article class="featured-issue issue__double-click">
    <div class="issue-content">
      <h1>
        <a href="<?php echo esc_url( home_url( '/issue-double-click/' ) ); ?>">
          The <em>Double Click</em> Temple Issue
        </a>
      </h1>
      <p>Gordon Sun. Emrys Donaldson. Meg Eden.</p>
      <p>Warren C. Longmire. Andy Winter. April Michelle Bratten.</p>
      <p>M. Shaw. Trace DePass. Dana Diehl. Matthew Vollmer.</p>
      <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-double-click/' ) ); ?>">Read</a>
    </div>
  </article> -->

  <article class="featured-issue issue__bug-feature">
    <div class="issue-content">
      <h1>
        <a href="<?php echo esc_url( home_url( '/issue-bug-feature/' ) ); ?>">
          The <em>Bug/Feature</em> Temple Issue
        </a>
      </h1>
      <p>James Ardis. Kim Stoll. Ashely Adams. Sam Martone.</p>
      <p>Alan Chazaro. Tom Kelly. Anthony Michael Morena.</p>
      <p>Terrence Abrahams. Kevin Stebner. Wheeler Light.</p>
      <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-bug-feature/' ) ); ?>">Read</a>
    </div>
  </article>

  <!-- <article class="featured-issue issue-feb2018">
    <div class="issue-content">
      <h1>
        <a href="<?php echo esc_url( home_url( '/issue-foul-play/' ) ); ?>">
          The <em>Foul Play</em> Temple Issue
        </a>
      </h1>
      <p>Elana Lev Friedland. Mary Coons. M. Shaw. Jacqueline Boucher.</p>
      <p>Jeff Pearson. Lukasz Drobnik. Hilary Hall. Tim Terhaar.</p>
      <p>Anastasia Jill. Bobby Rich. Geoff Peck.</p>
      <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-foul-play/' ) ); ?>">Read</a>
    </div>
  </article> -->

<!--   <article class="issue-next-gen" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
    <div class="issue-content">
      <h1>
        <a href="<?php echo esc_url( home_url( '/issue-next-gen/' ) ); ?>">
          The <em>Next Gen</em> Temple Issue
        </a>
      </h1>
      <p>Melissa Goodrich. Benjamin Kinney. Jackson Culpepper. dezireé a. brown.</p>
      <p>August Smith. Elizabeth Deanna Morris Lakes. Dylan Brown.</p>
      <p>Ashley Harris. Rhys Timson. Wesley Adam Rhodes.</p>
      <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-next-gen/' ) ); ?>">Read</a>
    </div>
  </article> -->

  <!-- BEGIN FEATURED QUERIES -->
  <?php
  $args = array(
    'posts_per_page' => 11,
    'meta_query' => array(
      'relation' => 'OR',
        array(
            'key' => 'issue',
            'compare' => 'NOT EXISTS'
        ),
        array(
            'key' => 'issue',
            'value' => ''
        )
    )
  );
  $featured_query = new WP_Query( $args );

  while ( $featured_query->have_posts() ) : $featured_query->the_post();
  $post_count = 'featured-'.($featured_query->current_post + 1) ?>

  <article class="<?php echo $post_count; ?>" >
    <a class="post-image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>);"></a>
    <div class="post-meta">
      <h1>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>
      <h2><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
      <time datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
    </div>
    <div class="post-excerpt">
      <?php the_excerpt(); ?>
    </div>
    <div class="post-category">
      <?php the_category(', '); ?>
    </div>
    <div class="post-mask"></div>
  </article>

  <!-- both chapbook announcements -->
  <?php if ( $featured_query->current_post == 1 ): ?>

  <article class="featured-chap-1"  style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/chapbooks/everything-makes-a-noise/front_page_teaser.png"; ?>');">
    <div class="chap-top">
      <a href="<?php echo esc_url( home_url( '/everything-makes-a-noise-when-it-reveals-itself/' ) ); ?>">Read</a>
    </div>
    <div class="chap-bottom">
      <h1>
        <a href="<?php echo esc_url( home_url( '/everything-makes-a-noise-when-it-reveals-itself/' ) ); ?>">
          Everything Makes a Noise When it Reveals Itself
        </a>
      </h1>
      <h2>by Lisa Ciccarello</h2>
      <p>Take a wander through the dark and the fog. Our fifth chapbook.</p>
    </div>
  </article>

  <article class="featured-chap-2" id="gradient">
    <div class="chap-top">
      <a href="<?php echo esc_url( home_url( '/please-please-get-over-here-please/' ) ); ?>">Read</a>
    </div>
    <div class="chap-bottom">
      <h1>
        <a href="<?php echo esc_url( home_url( '/please-please-get-over-here-please/' ) ); ?>">
          please please get over here please
        </a>
      </h1>
      <h2>by Jamison Crabtree</h2>
      <p><em>Cartridge Lit's</em> fourth chapbook. It's time to be put back together.</p>
    </div>
  </article>

  <?php elseif ( $featured_query->current_post == 10 ): ?>

  <article class="featured-chap-3" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/chapbooks/tender-glories/front_page_teaser.jpg"; ?>');">
    <div class="chap-top">
      <a href="<?php echo esc_url( home_url( '/tender-glories/' ) ); ?>">Read</a>
    </div>
    <div class="chap-bottom">
      <h1>
        <a href="<?php echo esc_url( home_url( '/tender-glories/' ) ); ?>">
          Tender Glories
        </a>
      </h1>
      <h2>by K. Jane Childs</h2>
      <p><em>Cartridge Lit</em>'s third chapbook. Wander into the glitchy, five-layered world of <em>Quest for Glory</em>.</p>
    </div>
  </article>

  <article class="featured-chap-4" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/chapbooks/an-object/front_page_teaser.jpg"; ?>');">
    <div class="chap-top">
      <a href="<?php echo esc_url( home_url( '/an-object-you-cannot-lose/' ) ); ?>">Read</a>
    </div>
    <div class="chap-bottom">
      <h1>
        <a href="<?php echo esc_url( home_url( '/an-object-you-cannot-lose/' ) ); ?>">
          An Object You Cannot Lose
        </a>
      </h1>
      <h2>by Sam Martone</h2>
      <p><em>Cartridge Lit</em>'s second chapbook. Create an adventure log, visit Coburg Castle, try to remember your father.</p>
    </div>
  </article>

  <article class="featured-chap-5" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/chapbooks/prepare-to-die/front_page_teaser.jpg"; ?>');">
    <div class="chap-top">
      <a href="<?php echo esc_url( home_url( '/prepare-to-die/' ) ); ?>">Read</a>
    </div>
    <div class="chap-bottom">
      <h1>
        <a href="<?php echo esc_url( home_url( '/prepare-to-die/' ) ); ?>">
          Prepare to Die
        </a>
      </h1>
      <h2>by Jess Jenkins</h2>
      <p>The first chapbook from <em>Cartridge Lit</em>. Get your fill of <em>Dark Souls</em> and then some.</p>
    </div>
  </article>

  <?php endif; ?>

  <?php endwhile; ?>

  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</section>
<!-- FEATURED -->

<?php get_footer(); ?>
