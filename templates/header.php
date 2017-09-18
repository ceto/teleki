<header class="banner">
    <div class="banner__top">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="medium-6 cell">
                    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                    <h1>TELEKI</h1>
                    <?php bloginfo('name'); ?></a>
                </div>
                <div class="medium-6 cell text-right">
                    <a href="#" class="button">e-NAPLÓ</a><br>
                    <a href="#">naptár</a> |  <a href="#">csengetési rend</a> | <a href="#">ebéd</a> | <a href="">"B" hét</a>
                </div>
            </div>
        </div>
    </div>
    <nav class="banner__nav">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="large-12 cell">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu dropdown menu--main', 'items_wrap' => '<ul class="%2$s" data-dropdown-menu data-click-open="true" data-disable-hover="true">%3$s</ul>']);
                endif;
                ?>
            </div>
        </div>
    </div>
</nav>
</header>