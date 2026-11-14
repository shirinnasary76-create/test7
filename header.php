<?php if (!defined('ABSPATH')) { exit; } ?><!doctype html>
<html lang="fa-IR" dir="rtl">
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<div id="desktopViewportShell"><div id="desktopStage">
<?php if (!dgs_is_layout()) { if (dgs_layout_id('header')) { dgs_render_layout('header'); } else { ?><header class="site-header"><div class="container header-inner"><a class="brand-logo" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a><nav class="main-nav" aria-label="منوی اصلی"><?php echo dgs_menu(); ?></nav><div class="header-actions"><button type="button" class="btn-mobile-menu" id="btnMobileMenu" aria-label="<?php echo esc_attr(dgs_s('mobile_menu')); ?>" aria-controls="mobileDrawer" aria-expanded="false"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button></div></div><?php echo dgs_mobile_drawer(); ?></header><?php } } ?>
<div id="primary" class="site-page-view dgs-wp-content <?php $k=dgs_page_key();echo esc_attr($k==='windows'&&!dgs_catalogue_is_current()?'win-page':(dgs_manifest()['pages'][$k]['wrapper']??'')); ?>">
