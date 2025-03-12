<?php
function enqueue_recording_script() {
    wp_enqueue_script('recording-script', get_template_directory_uri() . '/assets/js/upload.js', array(), null, true);
    wp_localize_script('recording-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_recording_script');

add_action('wp_ajax_upload_audio', 'upload_audio_handler');
add_action('wp_ajax_nopriv_upload_audio', 'upload_audio_handler');
function upload_audio_handler() {
    if (isset($_FILES['audio'])) {
        $file = $_FILES['audio'];
        $upload_dir = wp_upload_dir();
        
        // Tạo thư mục record nếu chưa có
        $record_dir = $upload_dir['basedir'] . '/record';
        if (!file_exists($record_dir)) {
            mkdir($record_dir, 0755, true);
        }
        
        // Đường dẫn mục tiêu là uploads/record
        $target_file = $record_dir . '/' . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            wp_send_json_success(['message' => 'Tải lên thành công!']);
        } else {
            wp_send_json_error(['message' => 'Lỗi khi tải lên!']);
        }
    } else {
        wp_send_json_error(['message' => 'Không tìm thấy file!']);
    }
    wp_die();
}

?>