<?php //get_template_part('templates/page', 'header');
//var_dump(get_option( 'sticky_posts' ));
?>
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
    <div class="grid-container">
        <header class="posthead">
            <div class="grid-x grid-margin-x align-center">
                <div class="large-9 cell">
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
                    <a class="readmore readmore--large" href="<?php the_permalink(); ?>">Tovább a részletekre</a>
                </div>
            </div>
        </header>
    </div>
</article>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<div class="grid-container">
    <div class="ps grid-x grid-margin-x align-center">
        <div class="large-9 cell">
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