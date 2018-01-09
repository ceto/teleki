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
                        <p class="kepzeshead__okjnum"><small>OKJ szám:</small> <?= $okjnum ?></p>
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
                    <div class="kepzes__content bodycopy">
                        <?php the_content(); ?>
                    </div>
                    <footer class="post__footer">
                        <?php get_template_part('/templates/postscage' ); ?>
                        <?php get_template_part('/templates/dlcage' ); ?>
                    </footer>
                    <?php comments_template('/templates/comments.php'); ?>
                </div>
            </div>
            <div class="large-4 cell kepzes__navcell" data-sticky-container>
                <div class="ps ps--narrow sticky" data-sticky data-sticky-on="large" data-top-anchor="sthelper:top" data-btm-anchor="sthelper:bottom" data-options="marginTop:0;">
                    <?php get_template_part( 'templates/recommend' ) ?>
                    <nav class="kepzes__nav">
                        <h3 class="widget__title">Válassz szakképzést</h3>
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
                            <?php wp_reset_postdata(); ?>
                        </ul>
                        <a class="readmore widget__readmore" href="<?php the_permalink(6); ?> ">Mutasd mindet</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile; ?>
