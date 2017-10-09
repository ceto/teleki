<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part( '/templates/hero','front'); ?>
<?php get_template_part( '/templates/promo','tiles'); ?>
<?php get_template_part( '/templates/breaking'); ?>
<section class="front__thecontent">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-justify">
            <div class="cell large-8">
                <div class="ps ps--narrow ps--nobottom">
                    <header class="pagehead">
                        <h1 class="pagehead__title"><small>Budapesti Gazdasági Szakképzési Centrum</small>Teleki Blanka Közgazdasági Szakgimnázium</h1>
                        <div class="lead pagehead__lead"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo perspiciatis, similique sint eius officiis dolorem quo obcaecati in labore deleniti ipsa atque facere debitis, aperiam tenetur amet voluptates sunt magnam.</p></div>
                        <p><a href="<?php the_permalink(12); ?>" class="readmore readmore--large">Tudj meg többet iskolánkról</a></p>
                    </header>
                </div>
            </div>
            <div class="large-4 cell">
                <div class="ps ps--narrow ps--nobottom">
                    <section class="widget widget--blogcage">
                        <h3 class="widget__title">Hírek és aktualitások</h3>
                        <div class="widget__body">
                            <?php
                            $the_cageposts = new WP_Query( array(
                            'posts_per_page'      => 4,
                            'post__not_in'            => array($alreadyprinted),
                            //'ignore_sticky_posts' => 1,
                            )); ?>
                            <ul class="blogcage">
                                <?php while ( $the_cageposts->have_posts() ) : $the_cageposts->the_post(); ?>
                                <?php setup_postdata( $post ); ?>
                                <?php get_template_part('templates/blogcage' ); ?>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_query(); ?>
                            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="readmore">Még több hír a blogon</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="grid-x grid-margin-x">
            <div class="tablet-6 large-4 cell tablet-order-1">
                <div class="ps ps--narrow ps--bottom">
                    <h4>Szakgimnázium</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat commodi, iste assumenda modi dolore vel expedita dolorum itaque iure perspiciatis sapiente soluta rem eum distinctio ipsum pariatur. Illum cumque, consequatur.</p>
                    <p><a href="<?php the_permalink(157); ?>" class="readmore">Szakgimnáziumi képzés bemutatása</a></p>
                </div>
            </div>
            <div class="tablet-6 large-4 cell tablet-order-2">
                <div class="ps ps--narrow ps--bottom">
                    <h4>Felnőtt képzés</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat commodi, iste assumenda modi dolore vel expedita dolorum itaque iure perspiciatis sapiente soluta rem eum distinctio ipsum pariatur. Illum cumque, consequatur.</p>
                    <p><a href="<?php the_permalink(6); ?>" class="readmore">Ingyenes OKJ képzések</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="front__bottom ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-8 cell">
                <header class="pagehead">
                    <h1 class="pagehead__title"><small>Rólunk mondták</small></h1>
                </header>
                <blockquote class="testimonial">
                    <p>Nagy öröm volt ma szülőként meglátogatni az az iskolát, ahol 19 éve végeztem. Az én időmben is nagyszerű iskola volt, de ha lehet, még jobb lett. Örülök, hogy lányom is itt fog tanulni</p>
                    <cite>Esther Volek<br>CEO @ Microsoft Hungary</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>