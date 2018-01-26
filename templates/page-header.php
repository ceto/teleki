<?php use Roots\Sage\Titles; ?>
<div class="ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-8 cell">
                <header class="pagehead">
                    <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
                    <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
                </header>
            </div>
        </div>
    </div>
</div>