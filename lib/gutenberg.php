<?php //ブロックエディター（Gutenberg）関連
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

//カラーパレット色の取得
if ( !function_exists( 'get_cocoon_editor_color_palette_colors' ) ):
function get_cocoon_editor_color_palette_colors(){
  $colors = array(
    array(
        'name' => __( 'キーカラー', THEME_NAME ),
        'slug' => 'key-color',
        'color' => get_editor_key_color(),
    ),
    array(
        'name' => __( '赤色', THEME_NAME ),
        'slug' => 'red',
        'color' => 'var(--cocoon-red-color)',
    ),
    array(
        'name' => __( 'ピンク', THEME_NAME ),
        'slug' => 'pink',
        'color' => 'var(--cocoon-pink-color)',
    ),
    array(
        'name' => __( '紫色', THEME_NAME ),
        'slug' => 'purple',
        'color' => 'var(--cocoon-purple-color)',
    ),
    array(
        'name' => __( '深紫色', THEME_NAME ),
        'slug' => 'deep',
        'color' => 'var(--cocoon-deep-color)',
    ),
    array(
        'name' => __( '紺色', THEME_NAME ),
        'slug' => 'indigo',
        'color' => 'var(--cocoon-indigo-color)',
    ),
    array(
        'name' => __( '青色', THEME_NAME ),
        'slug' => 'blue',
        'color' => 'var(--cocoon-blue-color)',
    ),
    array(
        'name' => __( '天色', THEME_NAME ),
        'slug' => 'light-blue',
        'color' => 'var(--cocoon-light-blue-color)',
    ),
    array(
        'name' => __( '浅葱色', THEME_NAME ),
        'slug' => 'cyan',
        'color' => 'var(--cocoon-cyan-color)',
    ),
    array(
        'name' => __( '深緑色', THEME_NAME ),
        'slug' => 'teal',
        'color' => 'var(--cocoon-teal-color)',
    ),
    array(
        'name' => __( '緑色', THEME_NAME ),
        'slug' => 'green',
        'color' => 'var(--cocoon-green-color)',
    ),
    array(
        'name' => __( '黄緑色', THEME_NAME ),
        'slug' => 'light-green',
        'color' => 'var(--cocoon-light-green-color)',
    ),
    array(
        'name' => __( 'ライム', THEME_NAME ),
        'slug' => 'lime',
        'color' => 'var(--cocoon-lime-color)',
    ),
    array(
        'name' => __( '黄色', THEME_NAME ),
        'slug' => 'yellow',
        'color' => 'var(--cocoon-yellow-color)',
    ),
    array(
        'name' => __( 'アンバー', THEME_NAME ),
        'slug' => 'amber',
        'color' => 'var(--cocoon-amber-color)',
    ),
    array(
        'name' => __( 'オレンジ', THEME_NAME ),
        'slug' => 'orange',
        'color' => 'var(--cocoon-orange-color)',
    ),
    array(
        'name' => __( 'ディープオレンジ', THEME_NAME ),
        'slug' => 'deep-orange',
        'color' => 'var(--cocoon-deep-orange-color)',
    ),
    array(
        'name' => __( '茶色', THEME_NAME ),
        'slug' => 'brown',
        'color' => 'var(--cocoon-brown-color)',
    ),
    array(
        'name' => __( '灰色', THEME_NAME ),
        'slug' => 'grey',
        'color' => 'var(--cocoon-grey-color)',
    ),
    array(
        'name' => __( '黒', THEME_NAME ),
        'slug' => 'black',
        'color' => 'var(--cocoon-black-color)',
    ),
    array(
        'name' => __( '白', THEME_NAME ),
        'slug' => 'white',
        'color' => 'var(--cocoon-black-color)',
    ),
    array(
        'name' => __( '淡い青', THEME_NAME ),
        'slug' => 'watery-blue',
        'color' => 'var(--cocoon-watery-blue-color)',
    ),
    array(
        'name' => __( '淡い黄色', THEME_NAME ),
        'slug' => 'watery-yellow',
        'color' => 'var( --cocoon-watery-yellow-color)',
    ),
    array(
        'name' => __( '淡い赤', THEME_NAME ),
        'slug' => 'watery-red',
        'color' => 'var(--cocoon-watery-red-color)',
    ),
    array(
        'name' => __( '淡い緑', THEME_NAME ),
        'slug' => 'watery-green',
        'color' => 'var(--cocoon-watery-green-color)',
    ),
    // array(
    //     'name' => __( '桜', THEME_NAME ),
    //     'slug' => 'sakura',
    //     'color' => '#fef4f4',
    // ),
    // array(
    //     'name' => __( '象牙', THEME_NAME ),
    //     'slug' => 'ebur',
    //     'color' => '#f8f4e6',
    // ),
    // array(
    //     'name' => __( '月白', THEME_NAME ),
    //     'slug' => 'luna-white',
    //     'color' => '#eaf4fc',
    // ),
    // array(
    //     'name' => __( '白菫色', THEME_NAME ),
    //     'slug' => 'white-violet',
    //     'color' => '#eaedf7',
    // ),
    // array(
    //     'name' => __( '白花色', THEME_NAME ),
    //     'slug' => 'white-flower',
    //     'color' => '#e8ecef',
    // ),
    // array(
    //     'name' => __( '藍白', THEME_NAME ),
    //     'slug' => 'indigo-white',
    //     'color' => '#ebf6f7',
    // ),
    // array(
    //     'name' => __( '白磁', THEME_NAME ),
    //     'slug' => 'white-porcelain',
    //     'color' => '#f8fbf8',
    // ),
    // array(
    //     'name' => __( '生成り色', THEME_NAME ),
    //     'slug' => 'kinari',
    //     'color' => '#fbfaf5',
    // ),
    array(
        'name' => __( '拡張色A', THEME_NAME ),
        'slug' => 'ex-a',
        'color' => get_block_editor_extended_palette_color_a(),
    ),
    array(
        'name' => __( '拡張色B', THEME_NAME ),
        'slug' => 'ex-b',
        'color' => get_block_editor_extended_palette_color_b(),
    ),
    array(
        'name' => __( '拡張色C', THEME_NAME ),
        'slug' => 'ex-c',
        'color' => get_block_editor_extended_palette_color_c(),
    ),
    array(
        'name' => __( '拡張色D', THEME_NAME ),
        'slug' => 'ex-d',
        'color' => get_block_editor_extended_palette_color_d(),
    ),
    array(
        'name' => __( '拡張色E', THEME_NAME ),
        'slug' => 'ex-e',
        'color' => get_block_editor_extended_palette_color_e(),
    ),
    array(
        'name' => __( '拡張色F', THEME_NAME ),
        'slug' => 'ex-f',
        'color' => get_block_editor_extended_palette_color_f(),
    ),
  );
  //カラーパレットフック
  $colors = apply_filters('block_editor_color_palette_colors', $colors);
  return $colors;
}
endif;

//Gutenbergコードブロック用の言語CSS
if ( !function_exists( 'get_block_editor_code_languages' ) ):
function get_block_editor_code_languages(){
  $languages = array(
    array(
      'value' => 'nohighlight',
      'label' => __( 'ハイライト表示しない', THEME_NAME ),
    ),
    array(
      'value' => 'plaintext',
      'label' => __( 'プレーンテキスト', THEME_NAME ),
    ),
    array(
      'value' => 'bash',
      'label' => __( 'Bash', THEME_NAME ),
    ),
    array(
      'value' => 'basic',
      'label' => __( 'Basic', THEME_NAME ),
    ),
    array(
      'value' => 'cs',
      'label' => __( 'C#', THEME_NAME ),
    ),
    array(
      'value' => 'cpp',
      'label' => __( 'C++', THEME_NAME ),
    ),
    array(
      'value' => 'css',
      'label' => __( 'CSS', THEME_NAME ),
    ),
    array(
      'value' => 'd',
      'label' => __( 'D', THEME_NAME ),
    ),
    array(
      'value' => 'dos',
      'label' => __( 'DOS', THEME_NAME ),
    ),
    array(
      'value' => 'delphi',
      'label' => __( 'Delphi', THEME_NAME ),
    ),
    array(
      'value' => 'go',
      'label' => __( 'Go', THEME_NAME ),
    ),
    array(
      'value' => 'html',
      'label' => __( 'HTML', THEME_NAME ),
    ),
    array(
      'value' => 'haml',
      'label' => __( 'Haml', THEME_NAME ),
    ),
    array(
      'value' => 'json',
      'label' => __( 'JSON', THEME_NAME ),
    ),
    array(
      'value' => 'java',
      'label' => __( 'Java', THEME_NAME ),
    ),
    array(
      'value' => 'javascript',
      'label' => __( 'JavaScript', THEME_NAME ),
    ),
    array(
      'value' => 'less',
      'label' => __( 'Less', THEME_NAME ),
    ),
    array(
      'value' => 'markdown',
      'label' => __( 'Markdown', THEME_NAME ),
    ),
    array(
      'value' => 'objectivec',
      'label' => __( 'Objective C', THEME_NAME ),
    ),
    array(
      'value' => 'php',
      'label' => __( 'PHP', THEME_NAME ),
    ),
    array(
      'value' => 'perl',
      'label' => __( 'Perl', THEME_NAME ),
    ),
    array(
      'value' => 'python',
      'label' => __( 'Python', THEME_NAME ),
    ),
    array(
      'value' => 'r',
      'label' => __( 'R', THEME_NAME ),
    ),
    array(
      'value' => 'ruby',
      'label' => __( 'Ruby', THEME_NAME ),
    ),
    array(
      'value' => 'rust',
      'label' => __( 'Rust', THEME_NAME ),
    ),
    array(
      'value' => 'scss',
      'label' => __( 'SCSS', THEME_NAME ),
    ),
    array(
      'value' => 'sql',
      'label' => __( 'SQL', THEME_NAME ),
    ),
    array(
      'value' => 'swift',
      'label' => __( 'Swift', THEME_NAME ),
    ),
    array(
      'value' => 'vbscript',
      'label' => __( 'VBScript', THEME_NAME ),
    ),
    array(
      'value' => 'xml',
      'label' => __( 'XML', THEME_NAME ),
    ),
  );

  //カラーパレットフック
  $languages = apply_filters('get_block_editor_code_languages', $languages);
  return $languages;
}
endif;

//ブロックエディターカラーパレット用のCSS
if ( !function_exists( 'get_block_editor_color_palette_css' ) ):
function get_block_editor_color_palette_css(){
    $colors = get_cocoon_editor_color_palette_colors();
    ob_start();
    foreach ($colors as $color) {
    $slug = $color['slug'];
    $color = $color['color']; ?>


<?php //WordPressデフォルト ?>
html .body .has-<?php echo $slug; ?>-background-color {
    background-color: <?php echo $color; ?>;
}
html .body .has-<?php echo $slug; ?>-color {
    color: <?php echo $color; ?>;
}
html .body .has-<?php echo $slug; ?>-color .toggle-button::before {
    color: <?php echo $color; ?>;
}
html .body .has-<?php echo $slug; ?>-border-color {
    border-color: <?php echo $color; ?>;
}
<?php //囲みボタン ?>
html .body .btn-wrap.has-<?php echo $slug; ?>-background-color > a{
    background-color: <?php echo $color; ?>;
}
html .body .btn-wrap.has-<?php echo $slug; ?>-color > a{
    color: <?php echo $color; ?>;
}
html .body .btn-wrap.has-<?php echo $slug; ?>-border-color > a{
    border-color: <?php echo $color; ?>;
}
<?php //タブボックス ?>
<?php if(is_admin()): ?>
html .body .bb-tab.has-<?php echo $slug; ?>-border-color::before{
    background-color: <?php echo $color; ?>;
}
<?php endif; ?>
html .body .bb-tab.has-<?php echo $slug; ?>-border-color .bb-label{
    background-color: <?php echo $color; ?>;
}
<?php //アコーディオンボックス ?>
html .body .toggle-wrap.has-<?php echo $slug; ?>-color .toggle-button,
html .body .toggle-wrap.has-<?php echo $slug; ?>-color .toggle-button:before{
  color: <?php echo $color; ?>;
}

html .body .toggle-wrap.has-<?php echo $slug; ?>-border-color .toggle-button{
    background-color: <?php echo $color; ?>;
}
html .body .toggle-wrap.has-<?php echo $slug; ?>-border-color .toggle-button,
.toggle-wrap.has-<?php echo $slug; ?>-border-color .toggle-content{
    border-color: <?php echo $color; ?>;
}
<?php //アイコンリストボックス ?>
html .body .iconlist-box.has-<?php echo $slug; ?>-icon-color li::before{
    color: <?php echo $color; ?>;
}
<?php //マイクロバルーン ?>
html .body .micro-balloon.has-<?php echo $slug; ?>-color {
    color: <?php echo $color; ?>;
}
html .body .micro-balloon.has-<?php echo $slug; ?>-background-color {
  background-color: <?php echo $color; ?>;
  border-color: transparent;
}
html .body .micro-balloon.has-<?php echo $slug; ?>-background-color.micro-bottom::after {
  border-bottom-color: <?php echo $color; ?>;
  border-top-color: transparent;
}
html .body .micro-balloon.has-<?php echo $slug; ?>-background-color::before {
  border-top-color: transparent;
  border-bottom-color: transparent;
}
html .body .micro-balloon.has-<?php echo $slug; ?>-background-color::after {
  border-top-color: <?php echo $color; ?>;
}
<?php //マイクロバルーン（ボーダー色） ?>
html .body .micro-balloon.has-border-color.has-<?php echo $slug; ?>-border-color {
  border-color: <?php echo $color; ?>;
}
html .body .micro-balloon.micro-top.has-<?php echo $slug; ?>-border-color::before {
  border-top-color: <?php echo $color; ?>;
}
html .body .micro-balloon.micro-bottom.has-<?php echo $slug; ?>-border-color::before {
  border-bottom-color: <?php echo $color; ?>;
}
<?php //見出しボックス ?>
html .body .caption-box.has-<?php echo $slug; ?>-border-color .box-label{
  background-color: <?php echo $color; ?>;
}
<?php //タブ見出しボックス ?>
html .body .tab-caption-box.has-<?php echo $slug; ?>-border-color .box-label{
  background-color: <?php echo $color; ?>;
}
html .body .tab-caption-box.has-<?php echo $slug; ?>-border-color .box-content{
  border-color: <?php echo $color; ?>;
}
html .body .tab-caption-box.has-<?php echo $slug; ?>-background-color .box-content{
  background-color: <?php echo $color; ?>;
}
<?php //ラベルボックス ?>
html .body .label-box.has-<?php echo $slug; ?>-border-color .box-content{
  border-color: <?php echo $color; ?>;
}
html .body .label-box.has-<?php echo $slug; ?>-background-color .box-content{
  background-color: <?php echo $color; ?>;
}
<?php //吹き出しボックス ?>
html .body .speech-balloon.has-<?php echo $slug; ?>-background-color {
    background-color: <?php echo $color; ?>;
}
html .body .speech-balloon.has-text-color.has-<?php echo $slug; ?>-color {
    color: <?php echo $color; ?>;
}
html .body .speech-balloon.has-<?php echo $slug; ?>-border-color {
    border-color: <?php echo $color; ?>;
}
html .body .sbp-l .speech-balloon.has-<?php echo $slug; ?>-border-color::before{
  border-right-color: <?php echo $color; ?>;
}
html .body .sbp-r .speech-balloon.has-<?php echo $slug; ?>-border-color::before{
  border-left-color: <?php echo $color; ?>;
}
html .body .sbp-l .speech-balloon.has-<?php echo $slug; ?>-background-color::after{
  border-right-color: <?php echo $color; ?>;
}
html .body .sbp-r .speech-balloon.has-<?php echo $slug; ?>-background-color::after{
  border-left-color: <?php echo $color; ?>;
}
html .body .sbs-line.sbp-r .speech-balloon.has-<?php echo $slug; ?>-background-color{
  background-color: <?php echo $color; ?>;
}
html .body .sbs-line.sbp-r .speech-balloon.has-<?php echo $slug; ?>-border-color{
  border-color: <?php echo $color; ?>;
}
html .body .speech-wraphtml .body .sbs-think .speech-balloon.has-<?php echo $slug; ?>-border-color::before,
html .body .speech-wrap.sbs-think .speech-balloon.has-<?php echo $slug; ?>-border-color::after{
  border-color: <?php echo $color; ?>;
}
html .body .sbs-think .speech-balloon.has-<?php echo $slug; ?>-background-color::before,
html .body .sbs-think .speech-balloon.has-<?php echo $slug; ?>-background-color::after{
  background-color: <?php echo $color; ?>;
}
html .body .sbs-think .speech-balloon.has-<?php echo $slug; ?>-border-color::before{
  border-color: <?php echo $color; ?>;
}
<?php //タイムライン ?>
html .body .timeline-box.has-<?php echo $slug; ?>-point-color .timeline-item::before{
  background-color: <?php echo $color; ?>;
}
<?php //FAQ ?>
.has-<?php echo $slug; ?>-border-color.is-style-accordion .faq-question {
  background-color: <?php echo $color; ?>;
}
html .body .has-<?php echo $slug; ?>-question-color .faq-question-label{
  color: <?php echo $color; ?>;
}
html .body .has-<?php echo $slug; ?>-question-color.has-border-color .faq-question-label{
  color: <?php echo $color; ?>;
}
html .body .has-<?php echo $slug; ?>-answer-color .faq-answer-label{
  color: <?php echo $color; ?>;
}
html .body .is-style-square.has-<?php echo $slug; ?>-question-color .faq-question-label{
  color: #fff;
  background-color: <?php echo $color; ?>;
}
html .body .is-style-square.has-<?php echo $slug; ?>-answer-color .faq-answer-label{
  color: #fff;
  background-color: <?php echo $color; ?>;
}

    <?php
    }//カラーパレットのループ終了

    $btn_wrap_bk_color = 'transparent';
    if (is_admin()) {
        $btn_wrap_bk_color = '#f8e58c';
    }
    //1回だけ呼び出す ?>
html .body .btn-wrap{
    background-color: <?php echo $btn_wrap_bk_color; ?> !important;
    color: #333;
    border-color: transparent !important;
    font-size: 16px;
}


html .body .has-border-color .toggle-button{
    color: #fff;
}

html .body .has-border-color .toggle-button::before{
    color: #fff;
}

    <?php // フォントサイズ ?>
html .body .btn-wrap.has-small-font-size > a {
  font-size: 13px;
}
html .body .btn-wrap.has-medium-font-size > a {
  font-size: 20px;
}
html .body .btn-wrap.has-large-font-size > a {
  font-size: 36px;
}
html .body .btn-wrap.has-huge-font-size > a,
html .body .btn-wrap.has-larger-font-size > a {
  font-size: 42px;
}
    <?php
    $css = ob_get_clean();
    return $css;
}
endif;
