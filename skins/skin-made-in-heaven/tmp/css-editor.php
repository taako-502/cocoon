<?php
if (!defined('ABSPATH')) exit;


//******************************************************************************
//  文字
//******************************************************************************
$text = ['red', 'blue' , 'green'];

for ($i=0; $i<count($text); $i++) {
  $color = get_theme_mod("hvn_rich_text_color{$i}_setting");
  if ($color) {
    echo <<< EOF
.{$text[$i]},.bold-{$text[$i]} {color: {$color}!important;}

EOF;
  }
}


//******************************************************************************
//  マーカー
//******************************************************************************
$marker = [
  ['',      '#ffff99'],
  ['-red',  '#ffd0d1'],
  ['-blue', '#a8dafb'],
];

for ($i=0; $i<count($marker); $i++) {
  $color = get_theme_mod("hvn_marker_color{$i}_setting", $marker[$i][1]);
  if ($color) {
    if (get_theme_mod('hvn_marker_color_set1_setting')) {
      echo <<< EOF
.marker{$marker[$i][0]} {
  background: repeating-linear-gradient(-45deg, {$color} 0, {$color} 2px, transparent 2px, transparent 4px) no-repeat left bottom / 100%!important;
  background-color: unset!important;
}

.marker-under{$marker[$i][0]} {
  background: repeating-linear-gradient(-45deg, {$color} 0, {$color} 2px, transparent 2px, transparent 4px) no-repeat left bottom / 100% 0.5em!important;
  background-color: unset!important;
}

EOF;
    } else {
      echo <<< EOF
.marker{$marker[$i][0]} {
  background: {$color}!important;
}

.marker-under{$marker[$i][0]} {
  background: linear-gradient(transparent 60%, {$color} 60%)!important;
}

EOF;
    }
  }
}


//******************************************************************************
//  バッジ
//******************************************************************************
$b_class = ['orange', 'red', 'pink', 'purple', 'blue', 'green', 'yellow', 'brown', 'grey'];

$css = null;
for ($i=0; $i<count($b_class); $i++) {
  $color = get_theme_mod("hvn_badge_color{$i}_setting");
  if ($color) {
    $css .= "--cocoon-{$b_class[$i]}-color:{$color};";
  }
}
if ($css) {
  echo '[class*="badge"] {' . $css . '}';
}


//******************************************************************************
//  インラインボタン
//******************************************************************************
$i_class = ['black', 'red', 'blue', 'teal'];

$css = null;
for ($i=0; $i<count($i_class); $i++) {
  $color = get_theme_mod("hvn_inline_button_color{$i}_setting");
  if ($color) {
    $css .= "--cocoon-{$i_class[$i]}-color:{$color};";
  }
}
if ($css) {
  echo '[class*="inline-button"] {' . $css . '}';
}


if (get_theme_mod('hvn_inline_button_set3_setting')) {
  echo <<< EOF

[class*="inline-button"]:not([class*="inline-button-white-"]):after{
  --shadow: 3px;
  border-radius: inherit;
  box-shadow: 0 var(--shadow) 0 rgba(0, 0, 0, 0.2);
  content: '';
  display: block;
  height: 100%;
  left: -2px;
  margin: 0;
  pointer-events: none;
  position: absolute;
  top: -1px;
  width: calc(100% + 4px);
}

EOF;
}


//******************************************************************************
//  リスト丸数字
//******************************************************************************
$css = null;
$color = get_theme_mod('hvn_numeric_list_set1_setting');
if ($color) {
  $css = "background-color: {$color}!important;";
}

$no = get_theme_mod('hvn_numeric_list_set2_setting');
if ($no) {
  $css .= 'border-radius: 0!important;';
}

if ($css) {
  echo <<< EOF
.editor-styles-wrapper .is-style-numeric-list-enclosed > li:before,
.is-style-numeric-list-enclosed > li:before {
  {$css}
}

EOF;
}


//******************************************************************************
//  アイコンボックス
//******************************************************************************
$icon_box_class = [
  ['blockquote'               ,'#cccccc'],
  ['.is-style-information-box','#87cefa'],
  ['.is-style-question-box'   ,'#ffe766'],
  ['.is-style-alert-box'      ,'#f6b9b9'],
  ['.is-style-memo-box'       ,'#8dd7c1'],
  ['.is-style-comment-box'    ,'#cccccc'],
  ['.is-style-ok-box'         ,'#3cb2cc'],
  ['.is-style-ng-box'         ,'#dd5454'],
  ['.is-style-good-box'       ,'#98e093'],
  ['.is-style-bad-box'        ,'#eb6980'],
  ['.is-style-profile-box'    ,'#cccccc'],
  ['.information-box'         ,'#87cefa'],
  ['.question-box'            ,'#ffe766'],
  ['.alert-box'               ,'#f6b9b9'],
  ['.memo-box'                ,'#8dd7c1'],
  ['.comment-box'             ,'#cccccc'],
  ['.ok-box'                  ,'#3cb2cc'],
  ['.ng-box'                  ,'#dd5454'],
  ['.good-box'                ,'#98e093'],
  ['.bad-box'                 ,'#eb6980'],
  ['.profile-box'             ,'#cccccc']
];

$id_array = [];
for ($i=0; $i<count($icon_box_class); $i++) {
  $id_array[$i] = $icon_box_class[$i][0];
}

$no = get_theme_mod('hvn_icon_box_set1_setting');
switch($no) {
  case 1:
    $id = implode(',', $id_array) ;
    echo <<< EOF
{$id} {
  background-color: transparent!important;
  border-width: 1px!important;
  color: var(--cocoon-text-color);
}

EOF;

    break;

  case 2:
    $id =  implode(':before,', $id_array);
    echo <<< EOF
{$id}:before{
  border: 0!important;
  color: #fff!important;
  margin: 0!important;
}
EOF;

    for ($i=0; $i<count($icon_box_class); $i++) {
      echo <<< EOF
{$icon_box_class[$i][0]}:before {
  background-color: {$icon_box_class[$i][1]};
}

EOF;
    }
    break;
}


//******************************************************************************
//  タブボックス
//******************************************************************************
$no = get_theme_mod('hvn_tab_box_set1_setting');
switch($no) {
  case 1:
    echo <<< EOF
.blank-box.bb-tab,
.tab-caption-box-content {
  padding-top: calc(var(--padding15) + 12.5px);
}

.tab-caption-box-label {
  left: 15px;
  position: absolute;
  top: -12px;
}

.editor-styles-wrapper .blank-box.bb-tab:before,
.blank-box.bb-tab .bb-label {
  left: 14px;
  position: absolute;
  top: -12.5px;
}

EOF;
    break;

  case 2:
    echo <<< EOF
.blank-box.bb-tab {
  margin: 0 0 var(--gap30) 0!important;
  padding-top: calc(var(--padding15) + 1.8em)!important;
}

.editor-styles-wrapper .blank-box.bb-tab::before,
.blank-box.bb-tab .bb-label {
  top: -1px!important;
}


.tab-caption-box {
  margin: 0 0 var(--gap30) 0!important;
}

.tab-caption-box-label {
  position: absolute;
  top: 0;
}

.tab-caption-box-content {
  padding-top: calc(var(--padding15) + 1.8em)!important;
}

EOF;
    break;
}


//******************************************************************************
//  FAQ
//******************************************************************************
$no = get_theme_mod('hvn_faq_set1_setting');
switch($no) {
  case 1:
    echo <<< EOF
.faq .faq-item-label {
  background-color: var(--cocoon-custom-question-color)!important;
  color: #fff!important;
}
.faq .faq-answer-label {
  background-color: var(--cocoon-custom-answer-color)!important;
}

EOF;
    break;

  case 2:
    echo <<< EOF
.faq .faq-item-label {
  background-color: var(--cocoon-custom-question-color)!important;
  border-radius: 100%;
  color: #fff!important;
}
.faq .faq-answer-label {
  background-color: var(--cocoon-custom-answer-color)!important;
}

EOF;
    break;
}


//******************************************************************************
//  パレット反映
//******************************************************************************
$colors = get_cocoon_editor_color_palette_colors();

$default_colors = [];
if (class_exists('WP_Theme_JSON_Resolver')) {
  $settings = WP_Theme_JSON_Resolver::get_core_data()->get_settings();
  if (isset($settings['color']['palette']['default'])) {
    $default_colors = $settings['color']['palette']['default'];
  }
}

$colors = array_merge($colors, $default_colors);
foreach ($colors as $color) {
  $slug  = $color['slug'];
  $color = $color['color'];
  echo <<< EOF
html .body .is-style-hvn-timeline-mini.has-{$slug}-point-color:not(.not-nested-style) .timeline-item:before{
  border-color: {$color};
}

html .body .is-style-hvn-timeline-line.has-{$slug}-point-color:not(.not-nested-style) .timeline-item-content:before{
  background-color: {$color};
}

html .body .hvn-timeline.has-{$slug}-point-color:not(.not-nested-style) .timeline-item:before{
  border-color: {$color};
  color: {$color};
}

EOF;
}
