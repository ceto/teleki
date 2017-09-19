<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <header class="kepzeshead ">
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-right">
                <div class="large-9 cell">
                    <h1 class="kepzeshead__title"><?php the_title(); ?></h1>
                    <p class="kepzeshead__kivonat"><?= get_field('kivonat') ?></p>
                    <!-- <div class="kepzeshead__lead"><?php the_excerpt(); ?></div> -->
                    <?php if ($okjnum=get_field('okjszam')) :  ?>
                    <p class="kepzeshead__okjnum"><small>OKJ szám:</small> <?= $okjnum ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-9 cell large-order-2">
                <div class="ps ps--narrow">
                    <div class="lead"><?php the_excerpt(); ?></div>
                    <div class="kepzes__content">
                        <?php the_content(); ?>
                    </div>
                    <footer class="kepzes__footer">
                        <?php
                        $the_cageposts = new WP_Query( array(
                            'posts_per_page'      => 4,
                            'post__not_in'            => array(get_the_id()),
                            'ignore_sticky_posts' => 1,
                        )); ?>
                        <hr>
                            <section class="widget widget--sidebar">
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
                    </footer>
                    <?php comments_template('/templates/comments.php'); ?>
                </div>
            </div>
            <div class="large-3 cell large-order-1">
                <div class="ps ps--narrow">
                    <h3 class="widget__title">Ingyenes szakképzés</h3>
                    <?php
                    $actid=get_the_id();
                    $the_kepzesek = new WP_Query( array(
                    'posts_per_page'      => -1,
                    'post_type' => array(kepzes),
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                    ));
                    ?>
                    <ul class="menu menu--side vertical">
                        <?php while ($the_kepzesek->have_posts() ) : $the_kepzesek->the_post(); ?>
                        <?php setup_postdata( $post ); ?>
                        <li <?= ($actid==get_the_id()?'class="is-active"':''); ?>><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <li><a href="<?php the_permalink(6); ?> ">Mutasd mindet</a></li>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile; ?>