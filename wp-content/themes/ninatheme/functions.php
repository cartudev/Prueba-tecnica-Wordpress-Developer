<?php 

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');


};

function menues(){
    register_nav_menus(array(
    'header-first-menu' => 'Header first Menu',
    'header-second-menu' => 'Header first Menu',

    'footer-menu' => 'Footer Menu'
   ));
}

add_action('init', 'menues');

function assets(){
    wp_enqueue_style('estilos', get_stylesheet_uri(), '','1.0', 'all');
    wp_enqueue_style('tiny-slider-styles', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', '','2.9.4', 'all');
    wp_enqueue_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', 'tiny-slider-styles', '2.9.2', true);
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', 'tiny-slider', '1.0', true);
}

add_action('wp_enqueue_scripts','assets');


function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id'   => 'footer',
            'description' => 'Zona de Widgets para pie de página',
            'before_title' => '<p>',
            'after_title'  => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
        )
        );
}



add_action('widgets_init', 'sidebar');

function productos_type(){
    $labels = array(
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'manu_name' => 'Productos',
    );

    $args = array(
        'label'  => 'Productos', 
        'description' => 'Productos de Platzi',
        'labels'       => $labels,
        'supports'   => array('title','editor','thumbnail', 'revisions'),
        'public'    => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-cart',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true

    );    
    register_post_type('producto', $args);
}

add_action('init', 'productos_type');


	function storefront_product_search() {
			?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
			<?php
}


add_action( 'search_header', 'storefront_product_search');




add_filter( 'get_product_search_form' , 'bbloomer_custom_product_searchform' );
 
function bbloomer_custom_product_searchform( $html ) {
  $test = get_stylesheet_directory_uri().'/assets/img/Search.svg';
  return str_replace( 'class="">Buscar</button>', 'class="search-button--container"><img src='.$test.' alt="buscar icono"></button>', $html );
}

;?>
 




