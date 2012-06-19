<?php
get_header();
?>
<section class="posts">
	<h2>News</h2>
	<?php if (have_posts()): while (have_posts()): the_post();?>
	<article>
		<h3><a href="<?php the_permalink()?>"><?php the_date()?> | <?php the_title();?></a></h3>
		<div class="text">
			<?php the_excerpt()?>
		</div>
		<div class="meta"><?php the_author()?> | <a href="<?php the_permalink()?>#respond"><?php comments_number('No reviews', '1 review', '% reviews')?></a></div>
	</article>
	<?php endwhile; else:?>
	No content found
	<?php endif;?>
	<?php previous_posts_link('older news')?> | <?php next_posts_link('later news')?>
</section>
<?php
get_footer();
?>