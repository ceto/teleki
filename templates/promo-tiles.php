<section class="promotiles">
    <?php $target=get_field('target_1'); ?>
    <div class="promotile promotile--large">
        <figure class="promotile__bgimage">
            <a href="<?php the_permalink($target->ID); ?>">
                <img src="<?= get_field('image_1'); ?>" alt="">
            </a>
        </figure>
        <div class="promotile__inner">
            <p class="promotile__subtitle"><?= get_field('subtitle_1'); ?></p>
            <h3 class="promotile__title"><?= get_field('title_1'); ?></h3>
            <div class="promotile__lead">
                <p><?= get_field('text_1'); ?></p>
            </div>
            <a href="<?php the_permalink($target->ID); ?>" class="promotile__action button small alert"><?= get_field('button_1'); ?></a>
        </div>
    </div>
    <?php $target=get_field('target_2'); ?>
    <div class="promotile">
        <figure class="promotile__bgimage">
            <a href="<?php the_permalink($target->ID); ?>">
                <img src="<?= get_field('image_2'); ?>" alt="">
            </a>
        </figure>
        <div class="promotile__inner">
            <p class="promotile__subtitle"><?= get_field('subtitle_2'); ?></p>
            <h3 class="promotile__title"><?= get_field('title_2'); ?></h3>
            <a href="<?php the_permalink($target->ID) ?>" class="promotile__action promotile__action--onlyicon">
                <svg class="icon"><use xlink:href="#icon-arrow-outline-right"></use></svg>
            </a>
        </div>
    </div>
    <?php $target=get_field('target_3'); ?>
    <div class="promotile">
        <figure class="promotile__bgimage">
            <a href="<?php the_permalink($target->ID); ?>">
                <img src="<?= get_field('image_3'); ?>" alt="">
            </a>
        </figure>
        <div class="promotile__inner">
            <p class="promotile__subtitle"><?= get_field('subtitle_3'); ?></p>
            <h3 class="promotile__title"><?= get_field('title_3'); ?></h3>
            <a href="<?php the_permalink($target->ID); ?>" class="promotile__action promotile__action--onlyicon">
                <svg class="icon"><use xlink:href="#icon-arrow-outline-right"></use></svg>
            </a>
        </div>
    </div>
</section>