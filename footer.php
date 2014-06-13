<footer>


  <div class="row">
   <div class="small-12 large-3 columns">
    <h5>Social</h5>
    <hr>
    <ul>
      <li><a href="https://facebook.com/loonz206" target="_blank">
        <span class="fa-stack fa-lg">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x"></i>
        </span> Facebook</a></li>
        <li><a href="https://twitter.com/loonz206">
          <span class="fa-stack fa-lg">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x"></i>
          </span> Twitter</a></li>
          <li><a href="https:www.linkedin.com/in/lennypeters/" target="_blank">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-linkedin fa-stack-1x"></i>
            </span> LinkedIn</a></li>
            <li><a href="https://github.com/Loonz206" target="_blank">
              <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x"></i>
              </span> Github</a></li>
            </ul>
          </div>
          <div class="small-12 large-6 columns">
            <h5>Recent Posts</h5>
            <hr>
            <ul>

              <?php $the_query = new WP_Query( 'showposts=5' ); ?>

              <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

            
              <?php endwhile;?>
              
            </ul>
          </div>
        </div><!--/END ROW-->

        <p class="aligncenter">created by lenny peters | copyright &copy; 2012
          <script>
            var d=new Date();
            yr=d.getFullYear();
            if (yr!=2012)
              document.write("- "+yr);
          </script> | all rights reserved</p>

        </footer>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr2.6.2custom.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/togglenav.js"></script>

        <script>
          $("a[href='#Top']").click(function() {
            'use strict';
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
          });
        </script>










      </body>
      </html>
