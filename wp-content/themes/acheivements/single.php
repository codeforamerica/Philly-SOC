<?php get_header(); ?>

<body>
<div id="wrapper">
	<div id="content">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="post-title"><a href="<?php the_permalink() ?>" class="post-title-link" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">Posted by <?php the_author_posts_link(); ?> in <?php the_category(', '); ?> on <?php the_date() ?> at <?php the_time() ?></div>
        <div class="entry"><?php the_content('Read More &raquo;'); ?></div>
        <div class="post-comments"><?php comments_template(); ?></div>
        <div class="clear"></div>
    </div>
 
<?php endwhile; ?>
</div>
<div class="nav">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>
</body>
</html>
