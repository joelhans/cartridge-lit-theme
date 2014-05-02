<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Cartridge Lit
 */

get_header(); ?>

  <section class="search-page">

  <?php if ( have_posts() ) : ?>

    <h1>Search results for: <?php echo get_search_query(); ?></h1>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="nine-stack post-airship">
      <a class="image" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?> 
      </a>

      <div class="meta">

        <h1 class="entry-title entry-title-small"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( get_post_meta($post->ID, 'writer', true) ): ?>
        <h2 class="entry-author entry-author-small"><?php echo get_post_meta($post->ID, 'writer', true); ?></h2>
        <?php endif; ?>

        <time class="entry-time entry-time-small" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time> 

        <div class="entry-cats entry-cats-small">
          <?php echo get_the_category_list('&nbsp;'); ?>
        </div>

        <div class="entry-tags entry-tags-small">
          <?php echo get_the_tag_list(); ?>
        </div>

        <?php the_excerpt(); ?> 

      </div>
    </article>

    <?php endwhile; ?>

  <?php else : ?>

    <h1>Search results for: <?php echo get_search_query(); ?></h1>
    <p>Sorry, we couldn't find anything. :(</h1>

  <?php endif; ?>

  </section>
  
  <?php get_sidebar(); ?>

<?php get_footer(); ?>
