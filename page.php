<?php get_header(); ?>

<!-- /END HEADER -->   

<main class="singlepost">
  <article class="row">
    <div class="small-12 large-8 large-centered columns">
      <?php while ( have_posts() ) : the_post(); ?>
            
      <h2 class="page-title"><?php the_title(); ?> //</h2>

      <?php the_content(); ?>
      
      <?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      
      <?php edit_post_link(__('Edit','homegrown'), '[', ']'); ?>
      
    
    <?php endwhile; ?>
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