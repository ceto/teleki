<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>><div class="grid-container">
    <header class="posthead">
        <div class="grid-x grid-margin-x">
            <div class="large-2 cell">
                <div class="posthead__meta">
                    <?php get_template_part('templates/post-meta'); ?>
                </div>
            </div>
            <div class="large-8 cell">
                <div class="posthead__content">
                    <h1 class="posthead__title"><?php the_title(); ?></h1>
                    <div class="posthead__lead"><?php the_excerpt(); ?></div>
                </div>
            </div>
        </div>
    </header>
    <div class="grid-x grid-margin-x align-center">
        <div class="large-8 cell">
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer>
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            </footer>
            <?php comments_template('/templates/comments.php'); ?>
        </div>
    </div>
</div>
</article>
<?php endwhile; ?>