<?php
/**
* Template Name: Képzések Gyűjtő Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <header class="pagehead">
                <h1><?= Titles\title(); ?></h1>
                <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
            </header>
        </div>
    </div>
    <div class="grid-x grid-margin-x ">
        <div class="cell large-12">
            <?php
            $the_kepzesek = new WP_Query( array(
            'posts_per_page'      => -1,
            'post_type' => array(kepzes),
            'orderby' => 'menu_order',
            'order' => 'ASC'
            ));
            ?>
            <div class="grid-x grid-margin-x grid-margin-y medium-up-2 large-up-3">
                <?php while ($the_kepzesek->have_posts() ) : $the_kepzesek->the_post(); ?>
                <?php setup_postdata( $post ); ?>
                <div class="cell">
                    <div class="kepzescard">
                        <h3 clas="kepzescard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <h5 class="kepzescard__sub">Kétéves emelt szintű nappali képzés</h5>
                        <?php the_excerpt(); ?>
                        <a class="button small" href="<?php the_permalink(); ?>">Részletek</a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="grid-x grid-margin-x">
        <div class="large-8 cell">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>