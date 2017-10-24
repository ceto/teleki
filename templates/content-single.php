<?php get_template_part( '/templates/breaking'); ?>
<article <?php post_class(); ?>>
    <header class="posthead ps ps--nobottom">
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="large-9 xxlarge-8 cell">
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
                        <div class="posthead__lead lead"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-9 xxlarge-8 cell">
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