<?php //CSSやJSファイルの呼び出し

if ( !function_exists( 'cocoon_scripts' ) ):
function cocoon_scripts() {
////////////////////////////////////////////////////////////////
//
//スタイルシートの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //テーマスタイルの呼び出し
  ///////////////////////////////////////////
  wp_enqueue_style( THEME_NAME.'-style', get_template_directory_uri() . '/style.css' );

  ///////////////////////////////////////////
  //Font Awesome
  ///////////////////////////////////////////
  wp_enqueue_style( 'font-awesome-style', FONT_AWESOME_CDN_URL );

  ///////////////////////////////////////////
  //IcoMoon
  ///////////////////////////////////////////
  wp_enqueue_style( 'icomoon-style', get_template_directory_uri() . '/webfonts/icomoon/style.css' );

  ///////////////////////////////////////////
  //ソースコードのハイライト表示が有効のとき
  ///////////////////////////////////////////
  if ( is_code_highlight_enable() ) {
    //ソースコードハイライト表示用のスタイル
    wp_enqueue_style( 'code-highlight-style',  get_template_directory_uri() . '/plugins/highlight-js/styles/'.get_code_highlight_style().'.css' );
    wp_enqueue_script( 'code-highlight-js', get_template_directory_uri() . '/plugins/highlight-js/highlight.min.js', array( 'jquery' ), false, true );
    $data = '
      (function($){
       $("'.get_code_highlight_css_selector().'").each(function(i, block) {
        hljs.highlightBlock(block);
       });
      })(jQuery);
    ';
    wp_add_inline_script( 'code-highlight-js', $data, 'after' ) ;
  }

////////////////////////////////////////////////////////////////
//
//Wordpress関係スクリプトの呼び出し
//
////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////
  //jQueryの読み込み
  ///////////////////////////////////////////
  wp_enqueue_script('jquery');

  ///////////////////////////////////////////
  //コメント返信時のフォームの移動（WPライブラリから呼び出し）
  ///////////////////////////////////////////
  if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

  ///////////////////////////////////////////
  //テーマ内で使用するJavaScript関数をまとめて定義する外部ファイルを呼び出す（javascript.js）
  ///////////////////////////////////////////
  wp_enqueue_script( THEME_NAME.'-js', get_template_directory_uri() . '/javascript.js', array( 'jquery' ), false, true );

  ///////////////////////////////////
  //はてブシェアボタン用のスクリプト呼び出し
  ///////////////////////////////////
  if ( is_hatebu_share_button_visible() && is_singular() ){
    wp_enqueue_script( 'st-hatena-js', '//b.st-hatena.com/js/bookmark_button.js', array(), false, true );
  }

}
endif;
add_action( 'wp_enqueue_scripts', 'cocoon_scripts', 1 );