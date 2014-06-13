<?php if(function_exists('homegrown_pagenav')){ ?>
	<?php homegrown_pagenav(); ?> 
<?php } else { ?>
	<div class="post-nav">
		<span class="prev"><?php next_posts_link(__('&laquo; Older Entries', 'homegrown')) ?></span>
		<span class="next"><?php previous_posts_link(__('Newer Entries &raquo;', 'homegrown')) ?></span>
	</div>
<?php } ?>