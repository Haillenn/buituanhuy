<?php
/*
Plugin Name: Image Manager
Description: Plugin cho phép thêm, sửa, xóa ảnh.
Version: 1.0
Author: Your Name
*/

// Thêm menu
add_action('admin_menu', 'image_manager_menu');

function image_manager_menu() {
    add_menu_page(
        'Quản lý ảnh',             
        'Quản lý ảnh',             
        'manage_options',          
        'image-manager',           
        'image_manager_page',      
        'dashicons-format-image',  
        6                          
    );
}

// Tạo thư mục uploads/images nếu chưa tồn tại
add_action('plugins_loaded', 'create_upload_directory');

function create_upload_directory() {
    $upload_dir = wp_upload_dir();
    $images_dir = $upload_dir['basedir'] . '/images';

    if (!file_exists($images_dir)) {
        wp_mkdir_p($images_dir);
    }
}

function image_manager_page() {
    ?>
    <div class="wrap">
        <h1>Quản lý ảnh</h1>
        <form id="upload-image-form" enctype="multipart/form-data" method="POST" action="">
            <input type="file" name="image" required />
            <input type="submit" value="Tải lên" />
        </form>
        <div id="image-list">
            <?php display_images(); ?>
        </div>
    </div>
    <?php
}

// Xử lý upload ảnh
add_action('admin_init', 'handle_image_upload');

function handle_image_upload() {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploaded_file = $_FILES['image'];
        $upload_dir = wp_upload_dir();
        $target_dir = $upload_dir['basedir'] . '/images/'; // Đường dẫn đến thư mục images
        $target_path = $target_dir . basename($uploaded_file['name']);

        if (move_uploaded_file($uploaded_file['tmp_name'], $target_path)) {
            echo '<div class="updated"><p>Ảnh đã được tải lên thành công!</p></div>';
        } else {
            echo '<div class="error"><p>Đã có lỗi xảy ra khi tải ảnh lên.</p></div>';
        }
    }
}

// Hiển thị ảnh
function display_images() {
    $upload_dir = wp_upload_dir();
    $images = glob($upload_dir['basedir'] . '/images/*.{jpg,jpeg,png,gif,JPG,PNG,JPEG,GIF}', GLOB_BRACE);

    if ($images) {
        foreach ($images as $image) {
            echo '<div style="margin-bottom: 10px;">';
            echo '<img src="' . esc_url($upload_dir['baseurl'] . '/images/' . basename($image)) . '" width="100" height="100" />';
            echo ' <a href="?page=image-manager&delete=' . basename($image) . '">Xóa</a>';
            echo '</div>';
        }
    } else {
        echo '<p>Không có ảnh nào được tải lên.</p>';
    }
}

// Xử lý xóa ảnh
add_action('admin_init', 'handle_image_delete');

function handle_image_delete() {
    if (isset($_GET['delete'])) {
        $file_to_delete = $_GET['delete'];
        $upload_dir = wp_upload_dir();
        $file_path = $upload_dir['basedir'] . '/images/' . $file_to_delete;

        if (file_exists($file_path)) {
            unlink($file_path);
            echo '<div class="updated"><p>Ảnh đã được xóa thành công!</p></div>';
        } else {
            echo '<div class="error"><p>Không tìm thấy ảnh.</p></div>';
        }
    }
}
