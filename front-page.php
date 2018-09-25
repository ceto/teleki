<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( '/templates/promo','tiles'); ?>
<?php get_template_part( '/templates/breaking'); ?>
<section class="front__thecontent">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-8">
                <div class="ps ps--narrow ps--nobottom">
                    <header class="pagehead">
                        <h1 class="pagehead__title"><?php the_field('focim'); ?></h1>
                        <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
                        <?php the_content(); ?>
                    </header>
                </div>
                <div class="grid-x grid-margin-x">
                    <div class="tablet-6 large-6 cell">
                        <div class="ps ps--narrow ps--nobottom">
                            <?php the_field('kisblokk_1'); ?>
                        </div>
                    </div>
                    <div class="tablet-6 large-6 cell">
                        <div class="ps ps--narrow ps--nobottom">
                            <?php the_field('kisblokk_2'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-4 cell">
                <div class="ps ps--narrow ps--nobottom">
                    <section class="widget widget--blogcage">
                        <h3 class="widget__title">Hírek és aktualitások</h3>
                        <div class="widget__body">
                            <?php
                            $the_cageposts = new WP_Query( array(
                            'posts_per_page'      => 4,
                            'post__not_in'            => array($alreadyprinted),
                            //'ignore_sticky_posts' => 1,
                            )); ?>
                            <ul class="blogcage">
                                <?php while ( $the_cageposts->have_posts() ) : $the_cageposts->the_post(); ?>
                                <?php setup_postdata( $post ); ?>
                                <?php get_template_part('templates/blogcage' ); ?>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_query(); ?>
                            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="readmore">Még több hír a blogon</a>
                        </div>
                    </section>
                    <?php dynamic_sidebar('sidebar-frontpage'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="front__bottom ps ps--prigrad">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-8 cell">
                <?php get_template_part('templates/testimonials'); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>