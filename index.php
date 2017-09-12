<?php get_template_part('templates/page', 'header'); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
                <?php _e('Sorry, no results were found.', 'sage'); ?>
            </div>
            <?php get_search_form(); ?>
            <?php endif; ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        </div>
    </div>
</div>