<?php
/**
 * Used when you are looking at all posts in a date archive.
 *
 * @package Suffusion
 * @subpackage Templates
 */

global $suffusion_unified_options;
foreach ($suffusion_unified_options as $id => $value) {
	$$id = $value;
}

get_header();
suffusion_query_posts();
?>

    <div id="main-col">
<?php suffusion_before_begin_content(); ?>
      <div id="content" class="hfeed">
<?php
if ($suf_archive_excerpt == 'list') {
	get_template_part('layouts/layout-list');
}
else if ($suf_archive_excerpt == 'tiles') {
	suffusion_after_begin_content();
	get_template_part('layouts/layout-tiles');
}
else {
	suffusion_after_begin_content();
	get_template_part('layouts/layout-blog');
}
?>
      </div><!-- content -->
    </div><!-- main col -->
	<?php get_footer(); ?>
