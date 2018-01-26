<li class="blogcage__item">
    <?php if ( get_post_type()=='kepzes'  ) : ?>
        <span class="blogcage__updated blogcage__updated--text"><?= __('Képzés','teleki') ?></span>
    <?php elseif ( get_post_type()=='page'  ) : ?>
        <span class="blogcage__updated blogcage__updated--text"><?= __('Info','teleki') ?></span>
    <?php else: ?>
        <time class="blogcage__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('m/d.'); ?></time>
    <?php endif; ?>
    <h3 class="blogcage__title">
        <a href="<?php the_permalink(); ?>">
        <?php if( get_post_format()=='gallery'  ) : ?>
            <span class="blogcage__label blogcage__label--gallery">
                <svg class="icon"><use xlink:href="#icon-photo"></use></svg>
            </span>
        <?php elseif( get_post_format()=='video'  ) : ?>
            <span class="blogcage__label blogcage__label--video">
                <svg class="icon"><use xlink:href="#icon-film"></use></svg>
            </span>
        <?php endif; ?>
            <?php the_title(); ?>
        </a>
    </h3>
</li>