<article <?php post_class(); ?>>
    <div class="grid-container">
        <header class="posthead">
            <div class="grid-x grid-margin-x">
                <div class="large-12 cell">
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
        <?php if (is_single()):  ?>
            <div class="grid-x grid-margin-x">
                <div class="large-8 cell">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    <footer>
                        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                    </footer>
                    <?php comments_template('/templates/comments.php'); ?>
                </div>
                <div class="large-4 cell">
                    <section class="widget">
                        <h3 class="widget__title">Néhány oldalsáv elem</h3>
                        <div class="widget__body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est mollitia omnis id veniam, non, quaerat incidunt a dicta? Optio voluptatum hic temporibus excepturi molestias asperiores, voluptate aliquid eius provident. In.</p>
                        </div>
                    </section>
                    <section class="widget">
                        <h3 class="widget__title">Például valami promóció</h3>
                        <div class="widget__body">
                            <img src="//placehold.it/480x480/?text=promoció" alt="">
                        </div>
                    </section>
                </div>
        </div>
        <?php else: ?>
            <div class="grid-x grid-margin-x">
                <div class="large-12 cell">
                    <a class="readmore readmore--large" href="<?php the_permalink(); ?>">Tovább a részletekre</a>
                </div>
            </div>

        <?php endif; ?>
    </div>
</article>