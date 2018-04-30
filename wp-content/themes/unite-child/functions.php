<?php
	add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
	
	function enqueue_parent_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}
	
	add_action('init', 'create_taxonomy_actor');
	function create_taxonomy_actor(){
		register_taxonomy('actor', array('film'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Актер',
				'singular_name'     => 'Актер',
				'search_items'      => 'Поиск актера',
				'all_items'         => 'Все актеры',
				'view_item '        => 'Просмотр актера',
				'parent_item'       => 'Родительский актер',
				'parent_item_colon' => 'Родительский актер:',
				'edit_item'         => 'Редактировать актера',
				'update_item'       => 'Обновить актера',
				'add_new_item'      => 'Добавить нового актреа',
				'new_item_name'     => 'Имя нового актера',
				'menu_name'         => 'Актер',
			),
			'description'           => '', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => null, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			'hierarchical'          => false,
			'update_count_callback' => '',
			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			'_builtin'              => false,
			'show_in_quick_edit'    => null, // по умолчанию значение show_ui
		) );
	}

	add_action('init', 'create_taxonomy_genre');
	function create_taxonomy_genre(){
		register_taxonomy('genre', array('film'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Жанр',
				'singular_name'     => 'Жанр',
				'search_items'      => 'Поиск жанра',
				'all_items'         => 'Все жанры',
				'view_item '        => 'Просмотр анра',
				'parent_item'       => 'Родительский жанр',
				'parent_item_colon' => 'Родительский жанр:',
				'edit_item'         => 'Редактировать жанр',
				'update_item'       => 'Обновить жанр',
				'add_new_item'      => 'Добавить новый жанр',
				'new_item_name'     => 'Имя нового жанра',
				'menu_name'         => 'Жанр',
			),
			'description'           => '', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => null, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			'hierarchical'          => false,
			'update_count_callback' => '',
			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			'_builtin'              => false,
			'show_in_quick_edit'    => null, // по умолчанию значение show_ui
		) );
	}
	add_action('init', 'create_taxonomy_year');
	function create_taxonomy_year(){
		register_taxonomy('year', array('film'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Год',
				'singular_name'     => 'Год',
				'search_items'      => 'Поиск года',
				'all_items'         => 'Все года',
				'view_item '        => 'Просмотр года',
				'parent_item'       => 'Родительский год',
				'parent_item_colon' => 'Родительский год:',
				'edit_item'         => 'Редактировать год',
				'update_item'       => 'Обновить год',
				'add_new_item'      => 'Добавить новый год',
				'new_item_name'     => 'Новый год',
				'menu_name'         => 'Год',
			),
			'description'           => '', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => null, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			'hierarchical'          => false,
			'update_count_callback' => '',
			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			'_builtin'              => false,
			'show_in_quick_edit'    => null, // по умолчанию значение show_ui
		) );
	}
	add_action('init', 'create_taxonomy_country');
	function create_taxonomy_country(){
		register_taxonomy('country', array('film'), array(
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Страна',
				'singular_name'     => 'Страна',
				'search_items'      => 'Поиск страны',
				'all_items'         => 'Все страны',
				'view_item '        => 'Просмотр страны',
				'parent_item'       => 'Родительская страна',
				'parent_item_colon' => 'Родительский страна:',
				'edit_item'         => 'Редактировать страну',
				'update_item'       => 'Обновить страну',
				'add_new_item'      => 'Добавить новую страну',
				'new_item_name'     => 'Имя новой страны',
				'menu_name'         => 'Страна',
			),
			'description'           => '', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => null, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			'hierarchical'          => false,
			'update_count_callback' => '',
			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			'_builtin'              => false,
			'show_in_quick_edit'    => null, // по умолчанию значение show_ui
		) );
	}
	function advanced_box_film() {
		add_meta_box( 'advanced_section_film', 'Дополнительные поля', 'advanced_fields_film','film' );
	}
	
	add_action('add_meta_boxes', 'advanced_box_film');
	
	function advanced_fields_film(){
		$post = get_post();
		
		$price = get_post_meta($post->ID, 'film_price', true);
		$date = get_post_meta($post->ID, 'film_date', true);
		echo '<p><label for="price">Стоимость сеанса</label><input id="price" name="film_price" class="code" size="35" type="text" value="'.$price.'" placeholder="Введите цену" /></p>';
		echo '<p><label for="film_date">Дата выхода</label><input id="date" name="film_date" class="code" size="35" type="datetime-local" value="'.$date.'" placeholder="Введите дату" /></p>';
	}
	
	function save_advanced_fields_film( $post_id ) {
		
		$film_price = sanitize_text_field( $_POST['film_price'] );
		$film_date = sanitize_text_field( $_POST['film_date'] );
		
		update_post_meta( $post_id, 'film_price', $film_price );
		update_post_meta( $post_id, 'film_date', $film_date );
	}
	
	add_action( 'save_post', 'save_advanced_fields_film' );
	
	add_action('init', 'register_post_types');
	function register_post_types(){
		register_post_type('film', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Фильмы', // основное название для типа записи
				'singular_name'      => 'film', // название для одной записи этого типа
				'add_new'            => 'Добавить ', // для добавления новой записи
				'add_new_item'       => 'Новая запись', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование записи', // для редактирования типа записи
				'new_item'           => 'Новое ____', // текст новой записи
				'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
				'search_items'       => 'Искать ____', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Фильмы', // название меню
			),
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => null, // зависит от public
			'exclude_from_search' => null, // зависит от public
			'show_ui'             => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
			'show_in_nav_menus'   => null, // зависит от public
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-format-video',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => array('title','editor','author','thumbnail','excerpt','trackbacks','comments','revisions','page-attributes','post-formats'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => array(),
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		) );
	}


?>

<?php
function display_test(){ 

	$wpb_all_query = new WP_Query(array('post_type'=>'film', 'post_status'=>'publish', 'posts_per_page'=>5)); 
	if ( $wpb_all_query->have_posts() ) {
		$content ="<ul>";
		while ( $wpb_all_query->have_posts() ) { 
			$wpb_all_query->the_post(); 
			$content .="<li><a href='".the_permalink()."'>".the_title()."</a></li>";

		}
		$content .="</ul>";
		wp_reset_postdata();
		}
	return $content;
}


add_shortcode('view_test', 'display_test');
?>

<?php
function ia_news_display_test($atts){ 

extract(shortcode_atts(array(
        'num' => 5
        ), $atts));

$args = array( 
    'post_type'=>'film', 
    'post_status'=>'publish',
    'posts_per_page' => $num
);

    $testimonials = new WP_Query( $args );
    var_dump($testimonials);
				if( $testimonials->have_posts() ) {
					while( $testimonials->have_posts() ) {
						$testimonials->the_post();
						get_template_part( 'content', get_post_type());			
						}
					unite_paging_nav();
				}else {
					get_template_part( 'content', 'none' );
					
				}	
    wp_reset_postdata();
    var_dump($content);
    return get_template_part( 'content', get_post_type());
}

add_shortcode('ia_news_test', 'ia_news_display_test');