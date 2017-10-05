<?php
/**
* Template Name: Tanárok Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
            <div class="large-10 cell">
            <header class="pagehead ps ps--narrow">
                <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
            </header>
        </div>
    </div>
</div>

<?php if ( have_rows('vezetoseg') ): ?>
<div class="ps ps--xlight ps--narrow ps--bordered">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-10 cell">
                <div class="grid-x grid-margin-x grid-margin-y small-up-2 medium-up-2 tablet-up-4 large-up-4">
                    <?php while( have_rows('vezetoseg') ): the_row(); ?>
                    <div class="cell">
                        <div class="membercard">
                            <figure class="membercard__fig">
                                <img src="//placehold.it/480x640/?text=portre" alt="<?= get_sub_field('nev') ?>">
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
<div class="ps p--narrow">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-10 cell">
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
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>