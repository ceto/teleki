<li class="blogcage__item"><time class="blogcage__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('m/d.'); ?></time>
    <h3 class="blogcage__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>