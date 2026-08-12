<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme',function(){add_theme_support('title-tag');add_theme_support('post-thumbnails');});
add_action('wp_footer',function(){echo '<footer class="site-footer"><a href="'.esc_url(home_url('/運営者情報/')).'">運営者情報</a>　<a href="'.esc_url(home_url('/プライバシーポリシー/')).'">プライバシーポリシー</a>　<a href="'.esc_url(home_url('/お問い合わせ/')).'">お問い合わせ</a></footer>';});
