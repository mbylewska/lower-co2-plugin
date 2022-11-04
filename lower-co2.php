<?php
/*
Plugin Name: Lower CO2
Plugin URI:  https://martabylewska.com
Description: This plugin will help you lower CO2 footprint of your website.
Author: Marta Bylewska
Version: 1.0
Author URI: https://martabylewska.com
License: GPLv2 or later
*/


//Add a widget to the dashboard.
function lc_add_dashboard_widgets()
{
    add_meta_box(
        'dashboard_widget_id',
        esc_html__('Lower CO2', 'lc'),
        'lc_dashboard_widget_render',
        'dashboard',
        'side',
        'high'
    );
}
add_action('wp_dashboard_setup', 'lc_add_dashboard_widgets');


//Create the function to output the content
function lc_dashboard_widget_render()

{
    echo "Here you can find help with decreasing CO2 footprint of your website.";
    echo "<br>";
    echo "<br>";
    echo "First check your actual CO2 footprint. Go to this page and check by yourself- ";
    echo "<a href='https://www.websitecarbon.com/'>Website Carbon calculator</a>";
}
