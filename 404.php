<?php get_header(); ?>

<!--single.php-->
<main class="singlepost">
  <article class="row">
    <div class="small-12 large-8 large-centered columns">
    <img src="http://placehold.it/720x405/" alt=""/>
    <h2>Error 404 //</h2>
    <p>Use the navigation above if you feel you have reached this in error. Or the wonderful search bar.</p>
    <?php get_search_form(); ?>


      <?php if (have_posts()) : ?>
        <?php the_title( '<h2>', ' //</h2>' ); ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(''); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </article>
</main><!--/ END single.php -->



<div class="row">
  <div class="small-12 large-8 large-centered columns">
    <div id="btt">
      <a href="#Top"><button>Back to Top</button></a>
    </div>
  </div>
</div>
		
<?php get_footer(); ?>