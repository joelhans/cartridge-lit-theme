<section class="sidebar">

  <section class="sidebar-search">
    <?php get_search_form(); ?>
  </section>

  <section class="sidebar-about">
    <h1>About Cartridge Lit</h1>
    <p>We think video games are literature, and so why shouldn't there be literature about video games? That's the question we're hoping to answer here. <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Read more.</a></p>
  </section>

  <section class="sidebar-social">
    <h1>Follow us</h1> 
    <a href="http://twitter.com/cartridgelit">Twitter</a>
    <a href="https://www.facebook.com/CartridgeLit">Facebook</a>
    <a href="<?php echo esc_url( home_url( '/feed/' ) ); ?>">RSS</a>
  </section>

  <section class="sidebar-cats">
    <h1>Categories</h1>
    <?php echo str_replace("<br />"," ", wp_list_categories('title_li=&style=none&echo=0')); ?>
  </section>

  <section class="sidebar-tags">
    <h1>Tags</h1>
    <?php echo wp_tag_cloud('smallest=0.8&largest=1.2&unit=rem'); ?>
  </section>

  <section class="sidebar-archive">
    <h1>Archives</h1>
    <ul>
    <?php wp_get_archives(); ?> 
    </ul>
  </section> 

  <section class="sidebar-twitter-widget">
    <a class="twitter-timeline" href="https://twitter.com/CartridgeLit" data-widget-id="454964976508076032">Tweets by @CartridgeLit</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </section>

</section>
