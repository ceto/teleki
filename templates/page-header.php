<?php use Roots\Sage\Titles; ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <header class="pagehead ps ps--narrow">
                <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
            </header>
        </div>
    </div>
</div>