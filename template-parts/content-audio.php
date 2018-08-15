<?php
/**
 * Template part for displaying audio posts
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
	<div class="post-media">
        <div class="media-audio">
            <?php echo wp_oembed_get(get_post_meta(get_the_id(), '_audio_field', true)); ?>
        </div>
    </div>
	<div class="post-body">
	<p><?php echo wp_trim_words(get_the_content(), 50, ''); ?></p>
	<p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
	</div>
</article>