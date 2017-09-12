<?php while (have_posts()) : the_post(); ?>
    <section class="hero ps--black">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="medium-6 large-8 cell ps--dark">

                </div>
                <div class="medium-6 large-4 cell ps--light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex nesciunt sed aut consequuntur repellat aliquam tenetur ipsum illum consectetur tempore, deserunt quos eum provident saepe unde laboriosam incidunt nemo facere.</p>
                    <p>Consectetur adipisicing elit. Veritatis amet sit sint nulla, accusantium harum laboriosam porro vitae recusandae repudiandae optio minima quo quis, illum cupiditate impedit eaque maxime quisquam.</p>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>