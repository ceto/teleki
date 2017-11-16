<?php
/**
* Template Name: Tanárok Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<?php if ( have_rows('vezetoseg') ): ?>
<div class="ps ps--prigrad">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="medium-8 tablet-12 large-12 xlarge-10 cell">
                <div class="grid-x grid-margin-x grid-margin-y align-center small-up-2 medium-up-2 tablet-up-4 large-up-4 xlarge-up-4">
                    <?php while( have_rows('vezetoseg') ): the_row(); ?>
                    <div class="cell">
                        <div class="membercard">
                            <figure class="membercard__fig">
                                <img src="//placehold.it/480x480/?text=portre" alt="<?= get_sub_field('nev') ?>">
                            </figure>
                            <h3 class="membercard__title"><?= get_sub_field('nev') ?></h3>
                            <div class="membercard__titulus"><?= get_sub_field('beosztas') ?></div>
                            <?php if (get_sub_field('tantargy')): ?>
                            <div class="membercard__text"><?= get_sub_field('tantargy') ?></div>
                            <?php endif ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div id="sthelper" class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-8 cell">
            <div class="ps ps--narrow">
                <header class="pagehead">
                    <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                    <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
                </header>
                <div class="post__content bodycopy">
                    <?php the_content(); ?>
                    <?php if ( have_rows('tanarok') ): ?>
                    <h2 class="stabtabletitle">Tanárok</h2>
                    <table class="stabtable hover unstriped">
                        <thead>
                            <tr>
                                <th>Név</th>
                                <th>Tantárgy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while( have_rows('tanarok') ): the_row(); ?>
                            <tr>
                                <td class="stabtable__name">
                                    <?= get_sub_field('nev') ?>
                                    <?php if (get_sub_field('egyeb')): ?>
                                    <small><?= get_sub_field('egyeb') ?></small>
                                    <?php endif ?>
                                </td>
                                <td><?= get_sub_field('tantargy') ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                    <?php if ( have_rows('munkatarsak') ): ?>
                    <h2 class="stabtabletitle">További munkatársak</h2>
                    <table class="stabtable hover unstriped">
                        <thead>
                            <tr>
                                <th>Név</th>
                                <th>Beosztás</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while( have_rows('munkatarsak') ): the_row(); ?>
                            <tr>
                                <td class="stabtable__name">
                                    <?= get_sub_field('nev') ?>
                                </td>
                                <td><?= get_sub_field('beosztas') ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="large-4 cell kepzes__navcell" data-sticky-container>
            <div class="ps ps--narrow sticky" data-sticky data-sticky-on="large" data-top-anchor="sthelper:top" data-btm-anchor="sthelper:bottom" data-options="marginTop:0;">
                 <?php get_template_part( 'templates/recommend' ) ?>
                 <nav class="kepzes_nav">
                    <h3 class="widget__title">Még többet a Telekiről</h3>
                    <?php
                        if (has_nav_menu('tertiary_navigation')) :
                        wp_nav_menu(['theme_location' => 'tertiary_navigation', 'menu_class' => 'menu menu--side vertical', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
                        endif;
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>