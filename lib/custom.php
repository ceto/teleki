<?php

  // 1. customize ACF path
  add_filter('acf/settings/path', 'teleki_acf_settings_path');
   function teleki_acf_settings_path( $path ) {
      $path = get_stylesheet_directory() . '/lib/acf/';
      return $path;
  }
  // 2. customize ACF dir
  add_filter('acf/settings/dir', 'teleki_acf_settings_dir');
  function teleki_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/lib/acf/';
    return $dir;
  }

  // 3. Hide ACF field group menu item
  //add_filter('acf/settings/show_admin', '__return_false');

  // 4. Include ACF
  include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

  // Adding excerpt box to pages
  add_post_type_support( 'page', 'excerpt' );



//exclude sticky posts from main query
/*
add_action( 'pre_get_posts', 'teleki_exclude_sticky_posts' );
function teleki_exclude_sticky_posts( $query ) {
    if( $query->is_main_query() && $query->is_home() ) {
        $stickies = get_option( 'sticky_posts' );
        $query->set( 'post__not_in', array(current($stickies)) );
        //$query->set( 'ignore_sticky_posts', 0 );
    }
}
*/

function teleki_foundation_pagination() {

global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination" role="navigation" aria-label="Pagination">';
        foreach ( $pages as $page ) {
            if (strpos($page,'current')) {
              echo '<li class="current">'.strip_tags($page).'</li>';
            } elseif (strpos($page,'next')) {
               echo '<li class="pagination-next">'.$page.'</li>';
            }  elseif (strpos($page,'prev')) {
               echo '<li class="pagination-previous">'.$page.'</li>';
            } else {
             echo '<li>'.$page.'</li>';
           }
        }
       echo '</ul>';
        }
}



function blockgrid_gallery( $output, $atts, $instance ) {
  $atts = shortcode_atts( array(
    'order'   => 'ASC',
    'orderby' => 'menu_order ID',
    'id'      => get_the_ID(),
    'columns' => 3,
    'size'    => 'thumbnail',
    'include' => '',
    'exclude' => '',
    ), $atts );

  $atts[ 'columns' ] = 3;

  if ( ! empty( $atts['include'] ) ) {
    $_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );

    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  } elseif ( ! empty( $atts['exclude'] ) ) {
    $attachments = get_children( array( 'post_parent' => intval( $atts[ 'id' ] ), 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
  } else {
    $attachments = get_children( array( 'post_parent' => intval( $atts[ 'id' ] ), 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
  }

  if ( empty( $attachments ) )
    return '';

  $output = '<div class="psgallery psgallery--incontent grid-x grid-margin-x grid-margin-y small-up-2 medium-up-2 tablet-up-3 large-up-2 xlarge-up-' . intval( $atts[ 'columns' ] ) .'" itemscope itemtype="http://schema.org/ImageGallery">';

  foreach ( $attachments as $id => $attachment ) {
    $img        = wp_get_attachment_image_url( $id, $atts[ 'size' ] );
    $img_srcset = wp_get_attachment_image_srcset( $id, $atts[ 'size' ] );
    $img_full   = wp_get_attachment_image_url( $id, 'full' );
    $image      = wp_get_attachment_image_src( $id, 'full' );

    $caption = ( ! $attachment->post_excerpt ) ? '' : ' data-caption="' . esc_attr( $attachment->post_excerpt ) . '" ';
    $imgtitle = ( ! $attachment->post_excerpt ) ? '' : ' data-title="' . esc_attr( $attachment->post_excerpt ) . '" ';

    $output .= '<figure class="cell psgallery__item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">'
      . '<a href="' . esc_url( $img_full ) . '" class="thumbnail" itemprop="contentUrl" '.$caption.' '.$imgtitle.'" data-size="'.$image['1'].'x'.$image['2'].'">'
      . '<img src="' . esc_url( $img ) . '" ' . $caption . ' itemprop="thumbnail" alt="' . esc_attr( $attachment->title ) . '"  srcset="' . esc_attr( $img_srcset ) . '" sizes="(max-width: 50em) 87vw, 680px" />'
      . '</a>';
      $output .= (! $attachment->post_excerpt) ? '' : '<figcaption>'.esc_attr( $attachment->post_excerpt ).'</figcaption>';
      $output .= '</figure>';
  }

  $output .= '</div>';
  //$output .= file_get_contents(get_stylesheet_directory_uri() . '/templates/photoswipedom.php');
  $output.='
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>
    </div>
</div>

  ';

  return $output;
}
add_filter( 'post_gallery', 'blockgrid_gallery', 10, 3 );