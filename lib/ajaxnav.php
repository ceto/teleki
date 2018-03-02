<?php

    function teleki_loadmore_ajax_handler(){
        // prepare our arguments for the query
        $args = json_decode( stripslashes( $_POST['query'] ), true );
        $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
        $args['post_status'] = 'publish';

        // it is always better to use WP_Query but not here
        query_posts( $args );

        if( have_posts() ) :
            // run the loop
            while ( have_posts() ) : the_post();
                echo '<div class="cell">';
                get_template_part('templates/postcard');
                echo '</div>';
            endwhile;
        endif;
        die; // here we exit the script and even no wp_reset_query() required!
    }



    add_action('wp_ajax_loadmore', 'teleki_loadmore_ajax_handler'); // wp_ajax_{action}
    add_action('wp_ajax_nopriv_loadmore', 'teleki_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}