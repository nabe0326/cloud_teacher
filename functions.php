<?php
function setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
}

add_action('after_setup_theme', 'setup');

?>