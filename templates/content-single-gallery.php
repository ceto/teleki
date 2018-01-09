<?php get_template_part( '/templates/breaking'); ?>
<article <?php post_class(); ?>>
    <header class="posthead ps">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="large-9 cell">
                    <div class="posthead__content">
                        <h1 class="posthead__title">
                        <?php if (is_single()):  ?>
                        <?php the_title(); ?>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        </h1>
                        <div class="posthead__meta">
                            <?php get_template_part('templates/post-meta'); ?>
                        </div>
                        <div class="posthead__lead lead"><?php the_excerpt(); ?></div>
                    </div>
                    <?php if (get_the_content()!=='') : ?>
                        <div class="post__content bodycopy">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="large-3 cell">
                    <?php get_template_part('templates/recommend') ?>
                </div>
            </div>
        </div>
    </header>
    <?php
        $gallery = get_field('gallery');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $gallery ): ?>
        <section class="ps ps--prigrad gallerysection">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="large-12 cell">
                        <div class="psgallery grid-thumbs grid-x grid-margin-x grid-margin-y small-up-2 medium-up-3 tablet-up-4 large-up-5 xlarge-up-6" itemscope itemtype="http://schema.org/ImageGallery">
                            <?php foreach( $gallery as $image ): ?>
                            <figure class="cell psgallery__item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="<?= $image['url'] ?>" class="thumbnail" itemprop="contentUrl" data-size="<?= $image['width'] ?>x<?= $image['height'] ?>" data-caption="<?= $image['caption'] ?>" data-title="<?= get_the_title() ?>">
                                    <?php echo wp_get_attachment_image( $image['ID'], 'thumbnail', false, 'itemprop="thumbnail"'  ); ?>
                                </a>
                            </figure>
                            <?php endforeach; ?>
                        </div>
                        <a class="readmore readmore--light" href="<?php the_permalink( 18 ) ?>">Még több fotóalbum itt</a>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part( 'templates/photoswipedom'); ?>
    <?php endif; ?>
</article>