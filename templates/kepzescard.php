<div class="kepzescard">
    <h3 class="kepzescard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="kepzescard__kivonat"><?= get_field('kivonat') ?></p>
    <div class="kepzescard__body">
           <?php the_excerpt(); ?>
    </div>
    <a class="kepzescard__action readmore" href="<?php the_permalink(); ?>">Részletek</a>
</div>