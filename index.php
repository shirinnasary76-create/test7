<?php
if (!defined('ABSPATH')) { exit; }
get_header();
if (have_posts()) {
    while(have_posts()) { the_post();
        if(is_singular() && get_post_meta(get_the_ID(),'_dgs_imported',true)) {
            if(did_action('elementor/loaded') && \Elementor\Plugin::instance()->db->is_built_with_elementor(get_the_ID())) { the_content(); }
            else { echo dgs_render_post_fallback(get_the_ID()); }
        } else {
            echo '<article class="container dgs-standard-entry"><h1>'; if(is_singular()){the_title();}else{echo '<a href="'.esc_url(get_permalink()).'">'.esc_html(get_the_title()).'</a>';}echo '</h1>';
            if(is_singular()){the_content();}else{the_excerpt();}echo '</article>';
        }
    }
    if(!is_singular()){the_posts_pagination();}
} else { echo '<div class="container dgs-standard-entry"><h1>'.esc_html(get_bloginfo('name')).'</h1>';get_search_form();echo '</div>'; }
get_footer();
