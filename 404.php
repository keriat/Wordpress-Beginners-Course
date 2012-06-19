<?php
get_header();
?>
<h2>Page not found</h2>
<div class="text">
	Page not found. Possible reasons:
	<ul>
		<li>You've mistyped url</li>
		<li>Page has been deleted</li>
	</ul>
	Now you can go to the <a href="<?php echo site_url()?>">home page</a>.
</div>
<?php
get_footer();
?>
