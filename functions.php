<?php

add_action(
    'wp_enqueue_scripts',
    function () {
        if (dirname(__FILE__) . '/dist/css/vendor.css') {
            wp_enqueue_style('vue-theme-vendor', get_template_directory_uri() . '/dist/css/vendor.css', null, null);
        }

        if (dirname(__FILE__) . '/dist/css/app.css') {
            wp_enqueue_style('vue-theme-app', get_template_directory_uri() . '/dist/css/app.css', null, null);
        }

        if (dirname(__FILE__) . '/dist/js/vendor.js') {
            wp_enqueue_script('vue-theme-vendor', get_template_directory_uri() . '/dist/js/vendor.js', null, null, true);
        }

        if (dirname(__FILE__) . '/dist/js/runtime.js') {
            wp_enqueue_script('vue-theme-runtime', get_template_directory_uri() . '/dist/js/runtime.js', array('vue-theme-vendor'), null, true);
        }

        if (dirname(__FILE__) . '/dist/js/app.js') {
            wp_enqueue_script('vue-theme-app', get_template_directory_uri() . '/dist/js/app.js', array('vue-theme-vendor', 'vue-theme-runtime'), null, true);
        }
    }
);
