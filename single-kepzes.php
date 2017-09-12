<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell">
                <header class="kepzesheader">
                    <h1 class="kepzesheader__title"><?php the_title(); ?></h1>
                    <h3 class="kepzesheader__sub">Kétéves emelt szintű nappali képzés</h3>
                    <h6 class="kepzesheader__okjnum"><small>OKJ szám:</small> 54 345 01</h6>
                </header>
                <div class="lead"><?php the_excerpt(); ?></div>
            </div>
        </div>
        <div class="grid-x grid-margin-x">
            <div class="large-9 cell large-order-2">
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </footer>
                <?php comments_template('/templates/comments.php'); ?>
            </div>
            <div class="large-3 cell large-order-1">
                <small>Szakképzés</small>
                <?php
                $actid=get_the_id();
                $the_kepzesek = new WP_Query( array(
                'posts_per_page'      => -1,
                'post_type' => array(kepzes),
                'orderby' => 'menu_order',
                'order' => 'ASC'
                ));
                ?>
                <ul class="menu vertical">
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
</article>
<?php endwhile; ?>