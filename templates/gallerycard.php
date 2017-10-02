<article <?php post_class('gallerycard'); ?>>
  <figure class="gallerycard__fig">
    <a class="thumbnail" href="<?php the_permalink(); ?>">
      <img src="//lorempixel.com/800/600/" alt="">
    </a>
  </figure>
  <header class="gallerycard__header">
    <h2 class="gallerycard__title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
  </header>
  <div class="gallerycard__meta"><?php get_template_part('templates/postcard-meta'); ?></div>
</article>
