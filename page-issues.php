<?php
/**
 * Template Name: Issues
 */

get_header(); ?>

  <section class="page-full">

    <article class="issue-razzle-dazzle" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
      <div class="issue-content">
        <h1>
          <a href="<?php echo esc_url( home_url( '/issue-razzle-dazzle/' ) ); ?>">
            The <em>Razzle Dazze!</em> Temple Issue
          </a>
        </h1>
        <p>Oliu. Swearingen-Steadwell. Yaeger. Crabtree. Luman.</p>
        <p>Hoffacker. Siebel. Romo. Spece. Bender-Murphy.</p>
        <p>Russell. Hensley. Stabley-Conde.</p>
        <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-razzle-dazzle/' ) ); ?>">Read</a>
      </div>
    </article>

  </section>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
