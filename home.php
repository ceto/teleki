<?php //get_template_part('templates/page', 'header');
//var_dump(get_option( 'sticky_posts' ));
?>

<?php if ( !is_paged() ) : ?>
    <?php
    $args = array(
    'posts_per_page'      => 1,
    'post__in'            => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
    );
    $stickyposts = new WP_Query( $args );
    ?>
    <?php while ($stickyposts->have_posts()) : $stickyposts->the_post(); ?>
    <?php setup_postdata( $post ); ?>
    <article <?php post_class(); ?>>
        <header class="posthead ps">
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
                        <a class="readmore readmore--large" href="<?php the_permalink(); ?>">Tovább a részletekre</a>
                    </div>
                </div>
            </div>
        </header>
    </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php if ( $stickyposts->post_count > 0 ) {
        the_post();
    } ?>
<?php else: ?>
    <?php get_template_part( '/templates/breaking'); ?>
<?php endif; ?>
<div class="ps ps--xlight ps--bordered">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-9 xxlarge-8 cell">
                <div class="postgrid grid-x grid-margin-x grid-margin-y medium-up-2 large-up-2">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="cell">
                        <?php get_template_part('templates/postcard'); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <br><br>
                <nav class="pagi">
                <?php
                    wp_reset_postdata();
                    teleki_foundation_pagination();
                ?>
                </nav>
            </div>
        </div>
    </div>
</div>