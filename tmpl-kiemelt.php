<?php
/**
* Template Name: Kiemelt Fejléces Sablon
*/
?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <header class="kepzeshead ">
        <figure class="kepzeshead__fig">
            <div class="kepzeshead__imgwrap">
                <?php if ( get_field('fejleckep') ) :?>
                    <?php $image =  get_field('fejleckep'); s?>
                    <?= wp_get_attachment_image( $image[ID], 'full' ) ?>
                <?php else: ?>
                    <img class="kepzeshead__img" src="<?= get_stylesheet_directory_uri().'/dist/images/nyitolap-stolen.jpg' ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
        </figure>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell">
                    <div class="kepzeshead__content">
                        <?php if ($okjnum=get_field('okjszam')) :  ?>
                        <p class="kepzeshead__okjnum"><small>OM azonosító:</small> <?= $okjnum ?></p>
                        <?php endif; ?>
                        <h1 class="kepzeshead__title"><?php the_title(); ?></h1>
                        <p class="kepzeshead__kivonat"><?= get_field('kivonat') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="sthelper" class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-8 cell">
                <div class="ps ps--narrow">
                    <div class="lead"><?php the_excerpt(); ?></div>
                    <div class="post__content bodycopy">
                        <?php the_content(); ?>
                    </div>
                    <footer class="post__footer">
                        <?php
                        $the_cageposts = new WP_Query( array(
                        'posts_per_page'      => 4,
                        'post__not_in'            => array(get_the_id()),
                        'ignore_sticky_posts' => 1,
                        )); ?>
                        <section class="widget">
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
                        <?php get_template_part('/templates/dlcage' ); ?>

                    </footer>
                    <?php comments_template('/templates/comments.php'); ?>
                </div>
            </div>
            <div class="large-4 cell kepzes__navcell" data-sticky-container>
                <div class="ps ps--narrow sticky" data-sticky data-sticky-on="large" data-top-anchor="sthelper:top" data-btm-anchor="sthelper:bottom" data-options="marginTop:0;">
                     <?php get_template_part( 'templates/recommend' ) ?>
                     <nav class="kepzes__nav">
                        <h3 class="widget__title">Még többet a Telekiről</h3>
                        <?php
                            if (has_nav_menu('tertiary_navigation')) :
                            wp_nav_menu(['theme_location' => 'tertiary_navigation', 'menu_class' => 'menu menu--side vertical', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
                            endif;
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile; ?>