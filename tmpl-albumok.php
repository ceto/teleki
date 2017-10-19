<?php
/**
* Template Name: Fotóalbum Listázó Sablon
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part( '/templates/breaking'); ?>
<div class="ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <header class="pagehead">
                    <h1 class="pagehead__title"><small>Életképek a Telekiből</small><?php the_title(); ?></h1>
                </header>
                <br>
                <?php
                $the_galleries = new WP_Query( array(
                'posts_per_page'      => -1,
                'post_type' => array(post),
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
        <div class="grid-x grid-margin-x grid-padding-y small-up-2 medium-up-2 tablet-up-3 large-up-4">
            <?php while ($the_galleries->have_posts() ) : $the_galleries->the_post(); ?>
            <?php setup_postdata( $post ); ?>
            <div class="cell">
                <?php get_template_part('templates/gallerycard' ); ?>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>