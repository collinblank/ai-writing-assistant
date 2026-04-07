<?php
function selected_text_handler(){
    $selected_text = sanitize_text_field($_POST['selected_text']);

    if($selected_text !== null){
        wp_send_json_success(['status' => 'success', 'selected_text' => $selected_text]);
    } else {
        $error = new WP_Error('Selected Text is Null.');
        wp_send_json_error($error);
    }
}

add_action('wp_ajax_check_selected_text', 'selected_text_handler');