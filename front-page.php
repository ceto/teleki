<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<section class="hero">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="medium-6 cell">
                <div class="promotion__inner">
                    <p class="promotion__subtitle">Nyolcadikos vagy?</p>
                    <h3 class="promotion__title">Tanulj menő szakgimnáziumban</h3>
                    <div class="promotion__lead">
                        <p>Szakmai érettségire készítünk fel 9-12. évfolyamon és biztos alapokat nyújtunk tovább tanuláshoz.</p>
                    </div>
                    <a href="#" class="promotion__action readmore">Miért válaszd a Telekit</a>
                </div>
            </div>
            <div class="medium-6 cell">
                <div class="promotion__inner">
                    <p class="promotion__subtitle">Már van érettségid?</p>
                    <h3 class="promotion__title">Szerezz OKJ szakmát ingyen</h3>
                    <div class="promotion__lead">
                        <p>OKJ-s ügyintézői és könyvelői képzéseinkkel jól fizetett közgazdasági területen helyezkedhetsz el.</p>
                    </div>
                    <a href="<?php the_permalink(6); ?>" class="promotion__action readmore">Ismerd meg szaképzéseinket</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$alreadyprinted = 0;
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
<div class="grid-container ps ps--narrow">
    <div class="grid-x grid-margin-x">
        <div class="large-4 cell">
            <div class="ps ps--narrow">
                <section class="widget widget--sidebar">
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
        <div class="large-8 cell">
            <div class="ps ps--narrow">
                <header class="pagehead">
                    <h1 class="pagehead__title"><small>Budapesti Gazdasági Szakképzési Centrum</small>Teleki Blanka Közgazdasági Szakgimnázium</h1>
                </header>
                <?php the_content(); ?>
                <p><a href="#" class="readmore readmore--large">Tudj meg többet iskolánkról</a></p>
            </div>
        </div>
    </div>
</div>
<section class="promotion">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-8 cell">
                <div class="promotion__inner">
                    <p class="promotion__subtitle">Példa promóciós sávra</p>
                    <h3 class="promotion__title">Itt valami nagyon fontos aktualitás olvasható</h3>
                    <div class="promotion__lead">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptatibus distinctio aperiam, quos deserunt eveniet minus minima magnam quam molestiae cumque doloribus autem sed, obcaecati ab tenetur blanditiis quibusdam reprehenderit.</p>
                    </div>
                    <a href="#" class="promotion__action button alert">Klikkelj ide barátom</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testiblock ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="medium-10 large-8 cell">
                <h3 class="widget__title">Rólunk mondták</h3>
                <blockquote class="testimonial">
                    <p>Nagy öröm volt ma szülőként meglátogatni az az iskolát, ahol 19 éve végeztem. Az én időmben is nagyszerű iskola volt, de ha lehet, még jobb lett. Örülök, hogy lányom is itt fog tanulni</p>
                    <cite>Esther Volek<br>CEO @ Microsoft Hungary</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>