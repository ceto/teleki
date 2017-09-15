<?php //get_template_part('templates/page', 'header'); ?>


    <?php
        $args = array(
            'posts_per_page'      => -1,
            'post__in'            => get_option( 'sticky_posts' ),
            'ignore_sticky_posts' => 1,
        );
        $stickyposts = new WP_Query( $args );
    ?>



    <?php while ($stickyposts->have_posts()) : $stickyposts->the_post(); ?>
        <?php setup_postdata( $post ); ?>
        <?php get_template_part('templates/content','single'); ?>
    <?php endwhile; ?>


    <?php wp_reset_postdata(); ?>
<div class="grid-container">
    <div class="ps grid-x grid-margin-x align-center">
        <div class="large-8 cell">
            <div class="grid-x grid-margin-x grid-margin-y medium-up-2 large-up-2">
                <?php while (have_posts()) : the_post(); ?>
                <div class="cell">
                    <?php get_template_part('templates/postcard'); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
        </div>
    </div>

</div>