<?php
function modelo_estilos(){
  wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
  wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900', array(), '1.0');
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap'), '1.0' );

  wp_enqueue_script('jquery');
  wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), '1.0',true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0',true );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '4.0',true );

}
add_action('wp_enqueue_scripts', "modelo_estilos");


function modelo_setup(){
  //imagenes destacadas
  add_theme_support('post-thumbnails');

  //agregar tamaño de imagenes
  add_image_size('productos', 1140, 446, true);
  add_image_size('producto_thumb', 400, 266, true);
  //menus
  register_nav_menus(array(
    'menu_principal'=>esc_html__('Menu Principal', 'modeloprensa'),
    'social_menu'=>esc_html__('Menu Social', 'modeloprensa'),
  ));
}
add_action('after_setup_theme', 'modelo_setup');


//agregar los menu_class
function modelo_li_class($classes, $item, $args){
  if($args->theme_location == 'menu_principal'){
      $classes[] = 'nav-item';
  }

  return $classes;
}
add_filter('nav_menu_css_class', 'modelo_li_class', 1, 3);

function modelo_a_class($atts, $item, $args){
  if($args->theme_location == 'menu_principal'){
  $class= 'class';
  $atts['class'] = 'nav-link';
}
  return $atts;
}
add_filter('nav_menu_link_attributes', 'modelo_a_class', 10, 3);
//zona de widgets
function modelo_widgets(){
  register_sidebar(array(
    'name'=>'Footer Widget 1',
    'id'  =>'footer_widget_1',
    'before_widget' =>'<div id="%1$s">',
    'after_widget'=> '</div>',
    'before_title'=> '<h3 class="text-uppercase text-center pb-4">',
    'after_title'=> '</h3>'
  ));
  register_sidebar(array(
    'name'=>'Footer Widget 2',
    'id'  =>'footer_widget_2',
    'before_widget' =>'<div id="%1$s">',
    'after_widget'=> '</div>',
    'before_title'=> '<h3 class="text-uppercase text-center pb-4">',
    'after_title'=> '</h3>'
  ));
  register_sidebar(array(
    'name'=>'Footer Widget 3',
    'id'  =>'footer_widget_3',
    'before_widget' =>'<div id="%1$s">',
    'after_widget'=> '</div>',
    'before_title'=> '<h3 class="text-uppercase text-center pb-4">',
    'after_title'=> '</h3>'
  ));
  //agregandok sdidebar

     register_sidebar(
         array(
             'id'            => 'primary',
             'name'          => __( 'Primary Sidebar' ),
             'description'   => __( 'A short description of the sidebar.' ),
             'before_widget' => '<div id="%1$s" class="widget %2$s" my-5 mt-5>',
             'after_widget'  => '</div>',
             'before_title'  => '<h5 class="widget-title mt-5">',
             'after_title'   => '</h5>',
         )
     );
     /* Repeat register_sidebar() code for additional sidebars. */
}
add_action('widgets_init', 'modelo_widgets');
