<?php
/*  管理画面に便利機能を追加する。 */


/*　管理画面の外観にメニューを作成する。　*/
add_theme_support('menus');

/* 管理画面の外観にウィジェットを追加する。 */

register_sidebar(
     array(
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

/* 管理画面かたアイキャッチ画像を表示させよう。 */

add_theme_support('post-thumbnails');

/* short code*/

function shortcode_tw(){
    return '<a href=endo@twiter.com>遠藤をフォローしましょう!</a>';
}

add_shortcode('tw','shortcode_tw');
?>