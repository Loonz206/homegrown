<?php get_header(); ?>
	<?php // the loop ?>
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
	
				<?php get_template_part( 'includes/loop' , 'index'); ?>
	
			<?php endwhile; ?>
							
			<?php get_template_part( 'includes/pagination'); ?>
		
		<?php else : ?>
	
			<p><?php _e( 'Sorry, nothing found.', 'themify' ); ?></p>
	
		<?php endif; ?>	

<main id="blogroll">
  <div class="row">
    <div class="small-12 columns">
    <h2>Blog  //</h2>
    </div>
    <div class="small-12 columns">
      <!-- Search Button Goes Here -->
    </div>
  </div>

  <div class="row">
    <article class="large-6 columns">
      <a href=""><h3 class="aligncenter">Blog Post</h3></a>
      <em>Friday June 23rd 2014</em>
      <figure>
        <a href=""><img src="http://placekitten.com/480/270" alt=""/></a>
      </figure>
      <p class="lead">Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </article>

    <article class="large-6 columns">
      <a href=""><h3 class="aligncenter">Blog Post</h3></a>
      <em>Friday June 23rd 2014</em>
      <figure>
        <a href=""><img src="http://placesheen.com/480/270" alt=""/></a>
      </figure>
      <p class="lead">Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </article>

  </div><!--end ROW-->

  <div class="row">
    <article class="large-6 columns">
      <a href=""><h3 class="aligncenter">Blog Post</h3></a>
      <em>Friday June 23rd 2014</em>
      <figure>
        <a href=""><img src="http://placesheen.com/480/270" alt=""/></a>
      </figure>
      <p class="lead">Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </article>


    <article class="large-6 columns">       
      <a href=""><h3 class="aligncenter">Blog Post</h3></a>
      <em>Friday June 23rd 2014</em>
      <figure>
        <a href=""><img src="http://placekitten.com/480/270" alt=""/></a>
      </figure>
      <p class="lead">Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </article>
  </div><!--/end ROW-->

</main><!--/END #blogroll-->




<div class="row">
  <div class="small-3 small-centered columns">
    <div id="btt">
      <a href="#Top"><button>Back to Top</button></a>
    </div>
  </div>
</div>		
		

<?php get_footer(); ?>