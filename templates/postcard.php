<article <?php post_class('postcard'); ?>>
  <header class="postcard__header">
    <h2 class="postcard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="postcard__meta"><?php get_template_part('templates/postcard-meta'); ?></div>
  </header>
  <div class="postcard__excerpt">
    <?php the_excerpt(); ?>
  </div>
  <a class="postcard__action readmore" href="<?php the_permalink(); ?>">Részletek</a>
</article>
