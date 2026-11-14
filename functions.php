<?php
/** Delgosha Elementor — native WordPress/Elementor-Free implementation. */
if (!defined('ABSPATH')) { exit; }
define('DGS_VERSION', '1.3.6');
require_once __DIR__ . '/inc/core.php';
require_once __DIR__ . '/inc/contact-directory.php';
require_once __DIR__ . '/inc/expert-directory.php';
require_once __DIR__ . '/inc/footer-columns.php';
require_once __DIR__ . '/inc/reviews.php';
require_once __DIR__ . '/inc/home-cta.php';
require_once __DIR__ . '/inc/shared-shell.php';
require_once __DIR__ . '/inc/content-tools.php';
require_once __DIR__ . '/inc/render.php';
require_once __DIR__ . '/inc/importer.php';
require_once __DIR__ . '/inc/highlights.php';
require_once __DIR__ . '/inc/window-catalogue.php';
require_once __DIR__ . '/inc/admin.php';
add_action('elementor/widgets/register', function ($manager) {
    require_once __DIR__ . '/inc/widgets.php';
    require_once __DIR__ . '/inc/generated-widgets.php';
    dgs_register_generated_widgets($manager);
});

add_action('elementor/elements/categories_registered',function($manager){$manager->add_category('delgosha',['title'=>'بخش‌های دلگشا','icon'=>'fa fa-building']);});

add_filter('elementor/frontend/print_google_fonts','__return_false');
add_filter('elementor/fonts/additional_fonts',function($fonts){$fonts['Vazirmatn']='system';return $fonts;});
