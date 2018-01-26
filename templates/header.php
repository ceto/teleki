<section class="toprow show-for-tablet">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <a href="https://bgaszc-teleki.e-kreta.hu" target="_blank" class="toprow__action">E-NAPLÓ</a>
                <nav class="toprow__nav">
                    <?php
                    if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--student', 'items_wrap' => '<ul class="%2$s">%3$s<li class="menu-item menu-facebook menu-item--icon"><a href="https://www.facebook.com/TelekiBlankaKozgazdasagiSzki/" target="_blank"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg></a></li></ul>']);
                endif;
                ?>
            </nav>
        </div>
    </div>
</div>
</section>
<header class="banner">
<div class="banner__top">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="auto cell">
                <div class="banner__branding">
                    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                        <img class="brand__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                        <span class="brand__name"><span>BGSZC </span>Teleki</span>
                        <span class="brand__descr">Közgazdasági Szakgimnázium, Budapest</span>
                    </a>
                </div>
            </div>
            <div class="shrink cell show-for-tablet">
                <nav class="banner__nav">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu dropdown menu--main', 'items_wrap' => '<ul class="%2$s" data-dropdown-menu data-click-open="true" data-disable-hover="true">%3$s</ul>']);
                endif;
                ?>
                </nav>
            </div>
            <div class="shrink cell hide-for-tablet">
                <button class="menutoggler" data-open="mobilemodal">Menü</button>
            </div>
        </div>
    </div>
</div>
</header>