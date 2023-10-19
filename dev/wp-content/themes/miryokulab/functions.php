<?php
/*
 * Template Name: functions.php
 */

// Gutenberg を無効にする
// https://kinsta.com/jp/blog/disable-gutenberg-wordpress-editor/#disable-gutenberg-code
add_filter('use_block_editor_for_post', '__return_false', 10);

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );

// ショートコード
function shortcode_url() {
    return get_bloginfo('url');
  }
  add_shortcode('url', 'shortcode_url');
  
  function shortcode_permalink() {
    return get_permalink();
  }
  add_shortcode('permalink', 'shortcode_permalink');
  
  function shortcode_templateurl() {
    return get_template_directory_uri();
  }
  add_shortcode('tmplurl', 'shortcode_templateurl');


  // pタグやbrタグの自動挿入をオフ
  add_action('init', function() {
    remove_filter('the_content', 'wpautop');
  });


// パーツ読み込みショートコード [myphp file='my-template']
function Include_my_php($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/parts/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');


// カスタム投稿タイプ設定
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'magazine',
    array(
        'labels' => array(
        'name' => __( 'マガジン' ),
        'singular_name' => __( 'マガジン' )
      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'has_archive' => true,
      'menu_position' =>5,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
    )
  );
}

?>

