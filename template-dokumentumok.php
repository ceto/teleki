<?php
/**
* Template Name: Dokumentumok Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell large-10">
            <header class="pagehead ps ps--narrow">
                <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                <div class="lead pagehead__lead">
                    <?php the_excerpt(); ?>
                </div>
            </header>
            <div class="ps ps--notop">
            <?php get_template_part('/templates/dlcage' ); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>