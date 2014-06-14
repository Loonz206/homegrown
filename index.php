<?php get_header(); ?>

<!-- /END HEADER -->   

<main id="blogroll">
  <!--START THE LOOP-->
  <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
  <div class="row">

    <article class="large-6 columns">
      <h3 class="aligncenter"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_content(); ?>
      <div class="metadata">
        <span class="author">By <?php the_author_posts_link(); ?></span><br/>
        <span class="date"><?php the_time('F jS, Y'); ?></span><br/>
        <span class="catagories">Catagories <?php the_catagory(' &raquo; '); ?></span><br/>
        <?php
        $taglist = get_the_tags();
        if ($taglist) {
          echo "<span class=\"tags\">Tags ";
          $lasttag = end($taglist);
          foreach ($taglist as $val) {
            echo "<a href=\"".get_tag_link($val->term_id)."\" rel=\"tag\">".$val->name."</a>";
            if($val !== $lasttag){
              echo ", ";
            }
            echo "</span>";
          }
        }
        ?>
      </div>
    </article>

  </div>  
</main>

<!--/END LOOP-->

<!-- BEGIN FOOTER -->

<?php get_footer(); ?>