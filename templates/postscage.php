<?php if ( $posts = get_field('relposts') ): ?>
<section class="widget">
    <h3 class="widget__title">Kapcsolódó tartalmak és aktualitások</h3>
    <div class="widget__body">
        <ul class="blogcage">
            <?php foreach( $posts as $post) :  ?>
                <?php setup_postdata( $post ); ?>
                <?php get_template_part('templates/blogcage' ); ?>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>