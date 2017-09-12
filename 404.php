<?php get_template_part('templates/page', 'header'); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <div class="alert alert-warning">
                <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
            </div>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>