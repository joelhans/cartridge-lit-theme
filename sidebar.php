<section class="sidebar">

  <section class="sidebar-about">
    <h1>About Cartridge Lit</h1>
    <p>We think video games are literature, and so why shouldn't there be literature about video games? That's the question we're hoping to answer here. <a href="about/">Read more.</a></p>
  </section>

  <section class="sidebar-social">
    <h1>Follow us</h1> 
    <a href="http://twitter.com/cartridgelit">Twitter</a>
    <a href="https://www.facebook.com/CartridgeLit">Facebook</a>
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

</section>
