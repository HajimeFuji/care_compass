<?php
// 終了タグは書いてはいけない

define("SAKURA_DIR", get_template_directory_uri() );

function add_sakura_files(){
    // cssの読み込み
    // wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    wp_enqueue_style("sakura-drawer-style", "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css", null, "3.2.2", "all" );
    wp_enqueue_style('sakura-font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style("sakura-style", SAKURA_DIR.'/assets/css/style.css', ["sakura-drawer-style"], "1.0.0", );

    // wp_enqueue_style("sakura-style-pc", SAKURA_DIR.'/assets/css/style_pc.css', ["sakura-drawer-style"], "1.0.0", "screen and (min-width:769px)" );
    // wp_enqueue_style("sakura-style-sp", SAKURA_DIR.'/assets/css/style_sp.css', ["sakura-style-pc"], "1.0.0", "screen and (max-width:768px)" );

    // JSの読み込み
    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_script("sakura-script-jquery", SAKURA_DIR.'/assets/js/jquery-3.2.1.min.js',null,"3.2.1",false );

    wp_enqueue_script("sakura-script-iscroll", "https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js", ["sakura-script-jquery"], "5.2.0",true );

    wp_enqueue_script("sakura-script-drawer", "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js",["sakura-script-iscroll"],"3.2.2",true );

    wp_enqueue_script("sakura-script-common", SAKURA_DIR.'/assets/js/common.js',["sakura-script-drawer"],"1.0.0",false );
}

add_action('wp_enqueue_scripts','add_sakura_files');

// scssのプラグイン設定
define('WP_SCSS_ALWAYS_RECOMPILE', true);

function sakura_theme_setup() {
    // テーマにサムネイル設定機能追加
    add_theme_support('post-thumbnails');
    // カスタムメニュー追加
    register_nav_menus( array(      //複数のナビゲーションメニューを登録する関数
        //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
            'main-menu' => 'Main Menu',
            'footer-menu'  => 'Footer Menu',
            'drawer-menu'  => 'Drawer Menu',
        ) );
}
// アクションフックの実行
// テーマが読み込まれたときに独自の関数を呼び出す
add_action('after_setup_theme','sakura_theme_setup');

// カスタム投稿
// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//     register_post_type( 'outdoors',
//         [
//             'labels' => [
//                 'name' => 'Outdoors',   //管理画面での表示名
//             ],
//             'public' => true,   //公開許可
//             'has_archive' => true,  //アーカイブの一覧表示を有効化
//             'menu_position' => 20,  //管理画面メニューでの表示位置
//             'show_in_rest' => true,
//             'menu_icon' => 'dashicons-hammer',
//         ]
//     );
//     register_post_type( 'ouchi',
//     [
//         'labels' => [
//             'name' => 'おうちごと',   //管理画面での表示名
//         ],
//         'public' => true,   //公開許可
//         'has_archive' => true,  //アーカイブの一覧表示を有効化
//         'menu_position' => 20,  //管理画面メニューでの表示位置
//         'show_in_rest' => true,
//         'menu_icon' => 'dashicons-groups',
//     ]
//     );
//     register_post_type( 'oniwa',
//     [
//         'labels' => [
//             'name' => 'おにわごと',   //管理画面での表示名
//         ],
//         'public' => true,   //公開許可
//         'has_archive' => true,  //アーカイブの一覧表示を有効化
//         'menu_position' => 20,  //管理画面メニューでの表示位置
//         'show_in_rest' => true,
//         'menu_icon' => 'dashicons-carrot',
//     ]
//     );
// }

// ウィジェット有効化
function sakura_widgets_init(){
    register_sidebar([
        'name'          => 'main-sidebar',
        'id'            => 'main-sidebar',
        'description'   => 'サイドバー説明',
        'class'         => 'my-sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ]);
}

add_action("widgets_init","sakura_widgets_init");

//記事の表示順変更
function sortpost($query) {
    if(is_admin() || !$query->is_main_query())
        return;
    
    if ( $query->is_archive(  ) ) { /* アーカイブページの時に表示件数を5件にセット */
        // $query->set( 'posts_per_page', '3' );
     //ASC:昇順、DESC:降順
        $query->set('order', 'ASC');
        //orderbyで何順に並べ替えるか指定
        $query->set('orderby', 'date');
    }
}
add_action('pre_get_posts', 'sortpost');



// カスタムフィールドを検索条件に含む

// function custom_search($search, $wp_query) {
//     global $wpdb;
//     if (!$wp_query->is_search)
//     return $search;
//     if (!isset($wp_query->query_vars))
//     return $search;
//     $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
//     if ( count($search_words) > 0 ) {
//     $search = '';
//     $search .= "AND post_type = 'page', 'post'";
//     foreach ( $search_words as $word ) {
//         if ( !empty($word) ) {
//                 $search_word = '%' . esc_sql( $word ) . '%';
//                 $search .= " AND (
//                     {$wpdb->posts}.page_title LIKE '{$search_word}'
//                     OR {$wpdb->posts}.page_content LIKE '{$search_word}'
//                     OR {$wpdb->posts}.ID IN (
//                         SELECT distinct post_id
//                         FROM {$wpdb->postmeta}
//                         WHERE meta_value LIKE '{$search_word}'
//                     )
//                 ) ";
//             }
//         }
//     }
//     return $search;
// }
// add_filter('posts_search','custom_search', 10, 2);


// キーワードがなくても検索ページを表示させる

function custom_search($search, $wp_query  ) {
    //query['s']があったら検索ページ表示
    if ( isset($wp_query->query['s']) ) 
    $wp_query->is_search = true;
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);


// 検索フォームごとに search.php を変える
add_action('template_include', 'my_search_template');
function my_search_template($template)
{
    $type = filter_input(INPUT_GET, 'search_type');
    $new_template = '';
    if ($type) {
        switch ($type) {
            case 'all':
                $new_template = STYLESHEETPATH . '/search-all.php';
                break;
            case 'soudan':
                $new_template = STYLESHEETPATH . '/search-soudan.php';
                break;
            case 'houmon':
                $new_template = STYLESHEETPATH . '/search-houmon.php';
                break;
            case 'tuusyo':
                $new_template = STYLESHEETPATH . '/search-tuusyo.php';
                break;
            default:
                $new_template = '';
        }
    }
    if ($new_template) {
        if (file_exists($new_template)) {
            return $new_template;
        }
    }
    return $template;
}