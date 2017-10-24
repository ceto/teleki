<div class="reveal mobilemodal" id="mobilemodal" data-reveal data-animation-in="scale-in-down fast" data-animation-out="scale-out-up fast">
    <nav class="mobilemodal__mainnav">
        <a class="mobilemodal__brand" href="<?= esc_url(home_url('/')); ?>">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" alt="<?php bloginfo('name'); ?>">
        </a>
        <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu accordion-menu menu--mobilemain', 'items_wrap' => '<ul class="%2$s" data-accordion-menu>%3$s</ul>']);
            endif;
        ?>
    </nav>
    <nav class="mobilemodal__studentnav">
        <?php
            if (has_nav_menu('secondary_navigation')) :
            wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--mobilestudent align-center', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
            endif;
        ?>
    </nav>
    <a href="#" class="mobilemodal__enaplo button alert tiny">E-NAPLÓ</a>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>