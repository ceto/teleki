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
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </footer>
                <?php comments_template('/templates/comments.php'); ?>
                </div>
            </div>
            <div class="large-3 cell large-order-1">
                <div class="ps ps--narrow">
                <h3 class="widget__title">Képzések a Telekiben</h3>
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