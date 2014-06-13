<?php get_header(); ?>

<!-- /END HEADER -->   



<!--single.php-->
<main class="singlepost">
  <article class="row">
    <div class="small-12 large-8 large-centered columns">

      <?php if (have_posts()) : ?>
        <?php the_title( '<h2>', ' //</h2>' ); ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(''); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </article>
</main><!--/ END singlepost -->



<div class="row">
  <div class="small-12 large-8 large-centered columns">
    <div id="btt">
      <a href="#Top"><button>Back to Top</button></a>
    </div>
  </div>
</div>


<!-- BEGIN FOOTER -->

<?php get_footer(); ?>
