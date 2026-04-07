<?php 
/**
 * Plugin Name: AI Writing Assistant
 * Description: Highlights text in the block editor and returns an AI-powered rewrite suggestion via the Anthropic API.
 * Version: 1.0.5
 * Author: Collin
 * License: GPL-2.0-or-later
 */

require_once plugin_dir_path( __FILE__ )  . '/includes/ajax-handler.php';

add_action('enqueue_block_editor_assets', 'ai_writing_assistant_enqueue_script');

function ai_writing_assistant_enqueue_script(){
    wp_enqueue_script('ai-writing-assistant-editor', plugin_dir_url(__FILE__) . 'assets/js/' . 'editor.js', array(), '1.0.0', true);

    wp_localize_script(
        'ai-writing-assistant-editor',
        'ajaxData',
        array(
            'ajaxurl' => admin_url('admin-ajax.php')
        )
    );
}


?>