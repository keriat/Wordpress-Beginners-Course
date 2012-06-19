<?php
function wpc_get_page($slug)
{
	global $wpdb;
	if (is_numeric($slug))
	{
		$page = get_page($slug);
	}
	else
	{
		$page = $wpdb->get_row('SELECT DISTINCT * FROM '.$wpdb->posts.' WHERE post_name = "'.$slug.'" and post_status = "publish"');
	}
	return $page;
}

function wpc_get_permalink($slug)
{
	return get_permalink(intval(wpc_get_page($slug)->ID));
}

function wpc_the_permalink($slug)
{
	echo wpc_get_permalink($slug);
}