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
            <div class="grid-x grid-margin-x align-center">
                <div class="large-8 cell">
                    <div class="grid-x grid-margin-x grid-margin-y medium-up-2 large-up-2">
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="cell">
                            <?php //get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                            <?php get_template_part('templates/postcard'); ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php the_posts_navigation(); ?>
            </div>
        </div>
    </div>
</div>