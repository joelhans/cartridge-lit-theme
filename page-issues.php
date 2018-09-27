<?php
/**
 * Template Name: Issues
 */

get_header(); ?>

  <section class="page-full">

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

    <article class="issue-feb2018">
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
    </article>

    <article class="issue-next-gen" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
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
    </article>

    <article class="issue-consequences" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
      <div class="issue-content">
        <h1>
          <a href="<?php echo esc_url( home_url( '/issue-consequences/' ) ); ?>">
            The <em>Unforeseen Consequences</em> Temple Issue
          </a>
        </h1>
        <p>Adrienne Celt. Brian Oliu. Margaret Emma Brandl. JD Scott.</p>
        <p>Maxwell Neely-Cohen. Tom Kelly. Emma Fissenden. Berit Ellingsen.</p>
        <p>Jackson Culpepper. J. Bowers. Hannah Stephenson. Eric Shonkwiler.</p>
        <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-consequences/' ) ); ?>">Read</a>
      </div>
    </article>

    <article class="issue-solstice" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
      <div class="issue-content">
        <h1>
          <a href="<?php echo esc_url( home_url( '/issue-solstice/' ) ); ?>">
            The <em>Solstice</em> Temple Issue
          </a>
        </h1>
        <p>P. Scott Cunningham. Liam Swanson. Julia Madsen. Matthew Burnside. Sarah Merchant.</p>
        <p>Mike Salisbury. Marlin M. Jenkins. Meg Eden. Riley Bingham.</p>
        <p>Caolan Madden. Paul Crenshaw. Gabriel Ojeda-Sague. Catherine Kyle.</p>
        <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-solstice/' ) ); ?>">Read</a>
      </div>
    </article>

    <article class="issue-inter-sections" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
      <div class="issue-content">
        <h1>
          <a href="<?php echo esc_url( home_url( '/issue-inter-sections/' ) ); ?>">
            The <em>Inter++sections</em> Temple Issue
          </a>
        </h1>
        <p>Donora Hillard-Hare. Ron Riekki. Aubrey Hirsch. Tabitha Blankenbiller.</p>
        <p>Jenni B. Baker. Marissa Landrigan. Jess Dutschmann. Phillip Spotswood.</p>
        <p>Anna Lea Jancewicz. Jerrold Yam. Aiko Grieg.</p>
        <a class="issue-bottom" href="<?php echo esc_url( home_url( '/issue-inter-sections/' ) ); ?>">Read</a>
      </div>
    </article>

    <article class="issue-razzle-dazzle" style="background-image: url('<?php $chap_path = get_template_directory_uri(); echo $chap_path."/assets/images/a.jpg"; ?>');">
      <div class="issue-content">
        <h1>
          <a href="<?php echo esc_url( home_url( '/issue-razzle-dazzle/' ) ); ?>">
            The <em>Razzle Dazzle!</em> Temple Issue
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
