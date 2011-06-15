<div id="block"></div>
<div id="sidebar">
	<div id="nav">
	<h3>Main Menu</h3>
    	<?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
    </div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    
    <?php endif; ?>
</div>