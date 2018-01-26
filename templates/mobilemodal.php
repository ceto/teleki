<div class="reveal mobilemodal" id="mobilemodal" data-reveal data-animation-in="scale-in-down fast" data-animation-out="scale-out-up fast">
    <div class="mobilemodal__inner">
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
        <a href="https://bgaszc-teleki.e-kreta.hu" target="_blank" class="mobilemodal__enaplo button alert tiny">E-NAPLÓ</a>
    </div>
    <nav class="mobilemodal__studentnav">
            <?php
                if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--mobilestudent align-center', 'items_wrap' => '<ul class="%2$s">%3$s<li class="menu-item menu-facebook menu-item--icon"><a href="https://www.facebook.com/TelekiBlankaKozgazdasagiSzki/" target="_blank"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg></a></li></ul>']);
                endif;
            ?>
        </nav>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
</div>