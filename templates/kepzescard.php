<div class="kepzescard">
    <figure class="kepzescard__ill">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail() ?>
        </a>
    </figure>
    <div class="kepzescard__body">
        <h3 class="kepzescard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="kepzescard__kivonat"><?= get_field('kivonat') ?></p>
        <a class="kepzescard__action readmore" href="<?php the_permalink(); ?>">Részletek</a>
    </div>
</div>