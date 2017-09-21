<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <body <?php body_class(); ?>>
        <?php
        do_action('get_header');
        get_template_part('templates/header');
        ?>
        <div class="document" role="document">
            <main class="main" role="main">
                <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
            <?php /* if (Setup\display_sidebar()) : ?>
                <aside class="sidebar">
                    <?php include Wrapper\sidebar_path(); ?>
                </aside>
            <?php endif; */ ?>
        </div>
        <?php
            do_action('get_footer');
            get_template_part('templates/footer');
            get_template_part('templates/mobilemodal');
            wp_footer();
        ?>
    </body>
</html>