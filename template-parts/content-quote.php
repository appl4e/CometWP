<?php
/**
 * Template part for displaying quote posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comet
 */

?>


<article class="post-single">
	<div class="post-info">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h6 class="upper">
		<span>By</span><a href="<?php echo get_template_directory_uri(); ?>/author/<?php the_author(); ?>"> <?php the_author(); ?></a>
		<span class="dot"></span>
		<span><?php the_time('d F Y'); ?></span>
		<span class="dot"></span>
		<a href="#" class="post-tag"><?php the_tags(); ?></a></h6>
	</div>
	
	<div class="post-body">
        <blockquote class="italic">
            <p><?php the_content(); ?></p>
        </blockquote>
	</div>
</article>