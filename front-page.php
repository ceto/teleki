<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( '/templates/promo','tiles'); ?>
<?php get_template_part( '/templates/breaking'); ?>
<section class="front__thecontent">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-8">
                <div class="ps ps--narrow ps--nobottom">
                    <header class="pagehead">
                        <h1 class="pagehead__title"><small>Budapesti Gazdasági Szakképzési Centrum</small>Teleki Blanka Közgazdasági Szakgimnázium</h1>
                        <div class="lead pagehead__lead"><p>Állami fenntartású intézményünkben, hagyományos iskolai rendszerű képzés folyik. Szakgimnáziumi és szakképző osztályaink közgazdasági és kereskedelmi szakképesítést tanulnak.</p></div>
                        <p>Közel száz éves iskolánk a <abbr title="Budapesti Gazdasági Szakképzési Centrum">BGSZC</abbr> kiemelt tagintézménye.  A modern szellemiség, jó felszereltség és kiváló szakmai gárda jó alapot nyújt a nálunk tanuló diákok jövőjének megalapozásában.</p>
                        <p><a href="<?php the_permalink(12); ?>" class="readmore">Tudj meg többet iskolánkról</a></p>
                    </header>
                </div>
                <div class="grid-x grid-margin-x">
                    <div class="tablet-6 large-6 cell">
                        <div class="ps ps--narrow ps--nobottom">
                            <h4>Szakgimnázium</h4>
                            <p>A 9-12 évfolyamon nappali rendszerű szakgimnáziumi képzés keretein belül az érettségire felkészítés mellett ilyen és ilyen szakirányú tantárgyakat tanítunk. Elvégzésével kap még valmi szakmát és ez meg ez van vagy micsoda ez ti tudjátok.</p>
                            <p><a href="<?php the_permalink(157); ?>" class="readmore">Szakgimnáziumi képzés bemutatása</a></p>
                        </div>
                    </div>
                    <div class="tablet-6 large-6 cell">
                        <div class="ps ps--narrow ps--nobottom">
                            <h4>Felnőtt képzés</h4>
                            <p>Középfokú OKJ-s végzettséget adó szakmai képzéseinkre azon fiatalok jelentkezését várjuk akik nem nyertek felvételt a felsőoktatásba és/vagy esélyt szeretnének kapni jövőbeli elképzeléseik megvalósításához. A szakmák elsajátítása ingyenes.</p>
                            <p><a href="<?php the_permalink(6); ?>" class="readmore">Ingyenes OKJ képzések</a></p>
                        </div>
                    </div>
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
    </div>
</section>
<section class="front__bottom ps ps--prigrad">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-8 cell">
                <?php get_template_part('templates/testimonials'); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>