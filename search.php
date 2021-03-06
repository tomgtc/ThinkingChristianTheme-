<?php get_header(); ?>

<div class="content">
  <div class="body">
   <ul>
    <?php if (have_posts()) : ?>
    <h2 class="pagetitle">Search Results</h2>
    <div class="navigation">
      <div class="alignleft">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </div>
      <div class="alignright">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </div>
    </div>
    <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?>>
      <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a></h3>
      <small>
      <div class="topContent">
        <?php the_excerpt   ('(continue reading...)'); ?>
        <!--<a href="<?php the_permalink()?>" class="readmore">read more</a>-->
      </div>
      <?php the_time('l, F jS, Y') ?>
      </small>
      <div class="catntag search">
       <?php if (has_tag() ) :?>
      Tags: <?php the_tags('<em></em>', ', ', ''); ?>
      <?php endif; ?>
      </div>
    </div>
    <?php endwhile; ?>
    <div class="navigation">
      <div class="alignleft">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </div>
      <div class="alignright">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </div>
    </div>
    <?php else : ?>
    <h2 class="center">No posts found. Try a different search?</h2>
    <?php get_search_form(); ?>
    <?php endif; ?>
  </ul>
  </div>
  <!-- Closes body-->
  <!-- BEGIN OWA Tracking Code -->
  <?php     
  require_once('/home/thinkingchristian/thinkingchristian.net/webstats/owa_php.php');
      
  $owa = new owa_php();
  // Set the site id you want to track
  $owa->setSiteId('0b6c7a3b80ce532f970911c4ab6f5c85');
  // Uncomment the next line to set your page title
  $owa->setPageTitle('Search Result');
  // Set other page properties
  //$owa->setProperty('Search Result');
  $owa->trackPageView();
      
    ?>
  <!-- END OWA Tracking Code -->
<?php get_template_part( 'sidebar2' ); ?>
</div>
<!-- Closes Main -->
<?php get_footer(); ?>
