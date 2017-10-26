<?php
/**
* Template Name: Diákélet Sablon
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( '/templates/breaking'); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="ps ps--narrow ps--xlight ps--bordered">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <header class="pagehead">
                    <h2 class="pagehead__title"><small>Életképek a Telekiből</small>Fotóalbumok</h2>
                </header>
                <?php
                $the_galleries = new WP_Query( array(
                'posts_per_page'      => 4,
                'post_type' => array(post),
                'category__in' => array(6,8),
                'tax_query' => array(
                'relation' => 'AND',
                array(
                'taxonomy' => 'post_format',
                'field'    => 'slug',
                'terms'    => array( 'post-format-gallery' )
                )
                )
                ));
                ?>
            </div>
        </div>
    </div>
    <div class="swipey">
        <div class="swipey__inner">
            <div class="grid-container">
                <div class="grid-x grid-margin-x grid-padding-y">
                    <?php while ($the_galleries->have_posts() ) : $the_galleries->the_post(); ?>
                    <?php setup_postdata( $post ); ?>
                    <div class="small-3 cell">
                        <?php get_template_part('templates/gallerycard' ); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <a href="<?php the_permalink( 18 ) ?>" class="readmore">Mutasd az összes albumot</a>
            </div>
        </div>
    </div>
</div>
<div class="ps ps--narrow">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <header class="pagehead">
                    <h1 class="pagehead__title"><small>Házon belül</small>Iskolai események, beszámolók</h1>
                </header>
                <br><br>
                <?php
                $the_news = new WP_Query( array(
                'posts_per_page'      => 3,
                'post_type' => array(post),
                'category__in' => array(6,8),
                'tax_query' => array(
                'relation' => 'AND',
                array(
                'taxonomy' => 'post_format',
                'field'    => 'slug',
                'terms'    => array( 'post-format-gallery' ),
                'operator' => 'NOT IN',
                )
                )
                ));
                ?>
                <div class="grid-x grid-margin-x grid-margin-y medium-up-2 large-up-3">
                    <?php while ($the_news->have_posts() ) : $the_news->the_post(); ?>
                    <?php setup_postdata( $post ); ?>
                    <div class="cell">
                        <?php get_template_part('templates/postcard' ); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <br><br>
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="readmore readmore">Öszes bejegyzés böngészése</a>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>