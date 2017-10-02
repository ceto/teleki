<article <?php post_class(); ?>>
    <div class="grid-container">
        <header class="posthead">
            <div class="grid-x grid-margin-x">
                <div class="large-8 cell">
                    <div class="posthead__content">
                        <h1 class="posthead__title">
                        <?php if (is_single()):  ?>
                        <?php the_title(); ?>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        </h1>
                        <div class="posthead__meta">
                            <?php get_template_part('templates/post-meta'); ?>
                        </div>
                        <div class="posthead__lead"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php
        $gallery = get_field('gallery');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $gallery ): ?>


        <div class="ps ps--xlight ps--bordered ps--narrow">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="large-12 cell">
                        <div class="grid-thumbs grid-x grid-margin-x grid-margin-y small-up-2 medium-up-3 tablet-up-4 large-up-5 xlarge-up-6 align-middle">
                            <?php foreach( $gallery as $image ): ?>
                            <div class="cell">
                                <a href="<?= $image['url'] ?>" class="thumbnail"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="grid-container ps ps--narrow">
        <div class="grid-x grid-margin-x">
            <div class="large-8 cell">
                <div class="post__content">
                    <?php the_content(); ?>
                </div>
                <footer class="post__footer ps ps--narrow">
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                    <?php
                    $the_cageposts = new WP_Query( array(
                    'posts_per_page'      => 4,
                    'post__not_in'            => array(get_the_id()),
                    'ignore_sticky_posts' => 1,
                    )); ?>
                    <section class="widget widget--sidebar">
                        <h3 class="widget__title">Kapcsolódó tartalmak és aktualitások</h3>
                        <div class="widget__body">
                            <ul class="blogcage">
                                <?php while ( $the_cageposts->have_posts() ) : $the_cageposts->the_post(); ?>
                                <?php setup_postdata( $post ); ?>
                                <?php get_template_part('templates/blogcage' ); ?>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_query(); ?>
                        </div>
                    </section>
                </footer>
                <?php comments_template('/templates/comments.php'); ?>
            </div>
        </div>

    </div>
</article>