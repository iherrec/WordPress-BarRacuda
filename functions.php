<?php
    //add theme support for post thumbnails
    add_theme_support('post-thumbnails');

    function my_theme_scripts() {
        // Anexar la hoja de estilos principal
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        // Anexar todas las hojas de estilo restantes
        wp_enqueue_style( 'plugins', get_template_directory_uri().'/assets/css/plugins.min.css');
        wp_enqueue_style( 'template', get_template_directory_uri().'/assets/css/template.css');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        // Anexar los ficheros de JS

        // wp_enqueue_script ('masonry'); --> Activar librería de Masonry de Wordpress
        
        wp_register_script( 'plugins-js', get_template_directory_uri().'/assets/js/plugins.min.js', null, null, true );
        wp_enqueue_script( 'plugins-js' );
        
        wp_register_script( 'custom-js', get_template_directory_uri().'/assets/js/custom.min.js', null, null, true);
        wp_enqueue_script( 'custom-js' ); 
        
        wp_register_script( 'jquery-js', get_template_directory_uri().'/assets/js/jquery.min.js', null, null, false);
        wp_enqueue_script( 'jquery-js' ); 
        
        wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script( 'bootstrap-js' ); 
        
        wp_register_script( 'popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery-js' ), null, true);
        wp_enqueue_script( 'popper-js' ); 
    }
    //Función añadida para cargar la página. PREGUNTAR MODE
//     function get_page_object($slug) {
//     return get_page_by_path(strtolower($slug));
// }
    add_action('wp_enqueue_scripts', 'my_theme_scripts');
/*
* Retrieve a page object giving its title
* @param   $title  String  Page title
* @return  $page   Object  Page object
*/

function get_page_object($title) {

    $args = array(
        'title' => $title,          // Page title
        'post_type' => 'page',      // Only page type post
        'post_per_page' => 1,       // Only one tupla
        'post_status' => 'publish', // Only the published pages
    );

    $query = new WP_Query($args);

    if (!empty($query->post)) {
        $page = $query->post;
    } else {
        $page = null;
    }

    return $page;

}


/*
Limit the excerpt length depending on template
@return custom number of words
*/

function custom_excerpt()
{
    if (is_front_page()) {
        return 20;
    }
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt');



    /*
    *  Register the widget area in sidebars
    */

    function my_theme_widget_area() {
        $args = array (
            'name' => 'Sidebar Widgets', /*nombre del área de widgets */
            'id' => 'sidebar-calendar', /*valor del id de la caja que crea WP para el widget */
            'description' => 'Sidebar widget area',
            'before_widget' => '<article class ="widget">', /* esto sirve por si quieres cambiar el div que te crea wp a otra cosa. Hay que indicarle como abrir y como cerrar */
            'after_widget' => '</article>',
        );
        register_sidebar( $args );
    }
    add_action('widgets_init','my_theme_widget_area');

    /*
    * Retrieve a list with the blog tags
    * @return $tag_list String - Blog tag list
    */
    function get_tags_list( $limit = 25 ) {
        
        $tags_list = '';

        $args = array (
            'number' => $limit, // Máximo 25 tags
            'orderby' => 'count', // Ordenados por número de posts
            'order' => 'DESC' // De más usada a menos usada
        );

        $tags = get_tags( $args ); // Obtenemos todos los tags del blog pero en colección de objetos tipo tag

        foreach( $tags as $tag ) {
            $tags_list .= '<li><a href="'.get_tag_link( $tag->term_id ).'">'.$tag->name.'</a></li>';
        } 
        return $tags_list;
    } 

    /*
    * Retrieve post number of visits
    * @param  post_id        Integer      Post ID
    * @return $num_visits    Integer      Post number of visits
    */
    function get_num_visits( $post_id ) {
        $num_visits = 0;

        if ( get_post_meta( $post_id, 'num_visits', true ) ) {
            $num_visits = get_post_meta( $post_id, 'num_visits', true );
        }
        return $num_visits;
    }

    /*
    * Retrieve post number of visits
    * @param  post_id        Integer      Post ID
    * @return $num_visits    Integer      Post number of visits
    */
    function set_num_visits( $post_id ) {

        if ( get_post_meta( $post_id, 'num_visits', true ) ) {
            $num_visits = get_post_meta( $post_id, 'num_visits', true );  // Obtemenos el número de visitas
            $num_visits++;                                                // Le sumamos 1
            update_post_meta( $post_id, 'num_visits', $num_visits );      // Actualizamos el número de visitas
        } else {                                                          // Si no existe el metadato
            $num_visits = 1;
            add_post_meta ( $post_id, 'num_visits', $num_visits);         // Creamos el campo número de visitas
        }



    }
