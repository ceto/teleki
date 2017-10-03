<?php
global $alreadyprinted;
$the_stickypost = new WP_Query( array(
'posts_per_page'      => 1,
'post__in'            => get_option( 'sticky_posts' ),
'ignore_sticky_posts' => 1
));
?>
<section class="homebreaking">
    <div class="grid-container ">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <?php while ( $the_stickypost->have_posts() ) : $the_stickypost->the_post(); ?>
                <?php
                setup_postdata( $post );
                $alreadyprinted = get_the_id();
                ?>
                <div class="breaking">
                    <span class="breaking__label">Fontos:</span>
                    <h3 class="breaking__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <a class="breaking__readmore readmore" href="<?php the_permalink(); ?>">Tovább olvasom</a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>