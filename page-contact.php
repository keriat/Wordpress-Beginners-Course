<?php
get_header();
?>
<section class="posts">
	<?php if (have_posts()): while (have_posts()): the_post();?>
	<article>
		<h2><?php the_title()?></h2>
		<?php the_content()?>
	</article>
	<div class="form">
		Here will be contact form
	</div>
	<?php endwhile; else:?>
	No content found
	<?php endif;?>
</section>
<?php
get_footer();
?>