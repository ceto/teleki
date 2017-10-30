<?php
/**
* Template Name: Képzések Gyűjtő Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
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
            </div>
            <?php
                $the_kepzesek = new WP_Query( array(
                'posts_per_page'      => -1,
                'post_type' => array(kepzes),
                'orderby' => 'menu_order',
                'order' => 'ASC'
                ));
            ?>
            <div class="grid-x grid-margin-x grid-margin-y tablet-up-2 large-up-2 xxlarge-up-2">
                <?php while ($the_kepzesek->have_posts() ) : $the_kepzesek->the_post(); ?>
                <?php setup_postdata( $post ); ?>
                <div class="cell">
                    <?php get_template_part('templates/kepzescard' ); ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <br>
            <div class="post__content">
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
        </div>
        <div class="large-4 cell kepzes__navcell" data-sticky-container>
            <div class="ps ps--narrow sticky" data-sticky data-sticky-on="large" data-top-anchor="sthelper:top" data-btm-anchor="sthelper:bottom" data-options="marginTop:0;">
                 <?php get_template_part( 'templates/recommend' ) ?>
                 <nav class="kepzes_nav">
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

<div class="ps ps--notop">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">

            </div>
        </div>

    </div>
</div>
<section class="ps ps--narrow ps--xlight ps--bordered">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-8 cell">
                <div class="ps ps--narrow">
                    <header class="pagehead">
                        <h1 class="pagehead__title"><small>Nappali tagozat</small>Szakgimnázium a 9-12. évfolyamon</h1>
                        <div class="pagehead__lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nulla earum reprehenderit dolorum! Provident error, similique nemo, enim odit quaerat, consequatur veniam, placeat delectus quo blanditiis. Debitis eum, alias ipsum!</div>
                    </header>
                    <br>
                    <p><a href="<?php the_permalink(157); ?>" class="readmore readmore--large">Szakgimnáziumi képzés bemutatása</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>