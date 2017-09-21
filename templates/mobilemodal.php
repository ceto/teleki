<div class="reveal mobilemodal" id="mobilemodal" data-reveal>
    <nav class="mobilemodal__mainnav">
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

    <a href="#" class="button alert small">E-NAPLÓ</a>
    <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>

    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>