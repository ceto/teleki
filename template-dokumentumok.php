<?php
/**
* Template Name: Dokumentumok Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-8">
                <header class="pagehead">
                    <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                    <div class="lead pagehead__lead">
                        <?php the_excerpt(); ?>
                    </div>
                </header>
                <?php the_content(); ?>
                <?php get_template_part('/templates/dlcage' ); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>