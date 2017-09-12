<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <?php the_content(); ?>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </div>
    </div>
</div>