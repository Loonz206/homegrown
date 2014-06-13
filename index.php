<?php get_header(); ?>

<!-- /END HEADER -->  

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>


    <main id="blogroll">
      <div class="row">
        <div class="small-12 columns">
          <h2>Blog  //</h2>
        </div>
        <div class="small-12 columns">
          <?php get_search_form(); ?>
        </div>
      </div>

      <div class="row">
        <article class="large-6 columns">
          <a href="<?php the_permalink(); ?>"><h3 class="aligncenter"><?php the_title(); ?></h3></a>
          <em><?php the_time('jS F Y'); ?> | <? the_category(', ');?> |</em>
          <figure>
            <a href=""><img src="http://placekitten.com/480/270" alt=""/></a>
          </figure>
          <p class="lead"><?php the_content(''); ?></p>
          <a href="<?php the_permalink(); ?>">Continue Reading &raquo;</a>
        </article>

      <?php endwhile; ?>

      <nav id="pagination">
        <ul>
          <li class="older"><?php next_posts_link('Older Posts'); ?></li>
          <li class="newer"><?php next_posts_link('Newer Posts'); ?></li>
        </ul>
      </nav><!-- END NAVIGATION FOR PAGINATION -->

    <?php else : ?>

      <article class="nothing">
        <h2>Nothing Found</h2>
        <p>Sorry, but you are looking for something that isn't here.</p>
        <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
      </article>

    <?php endif; ?>



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


<!-- BEGIN FOOTER -->

<?php get_footer(); ?>