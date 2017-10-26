<li class="blogcage__item"><time class="blogcage__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('m/d.'); ?></time>
    <h3 class="blogcage__title">
        <a href="<?php the_permalink(); ?>">
        <?php if( get_post_format()=='gallery'  ) : ?>
            <span class="blogcage__label blogcage__label--gallery">
                <svg class="icon"><use xlink:href="#icon-photo"></use></svg>
            </span>
        <?php endif; ?>
            <?php the_title(); ?>
        </a>
    </h3>
</li>