<?php
/*
Template Name: photo Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/home.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/photo.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="photo-content">
    <div class="photo-title">
        <h2 style="font-weight: bold;">Ảnh</h2>
        <blockquote>Những tấm ảnh của tớ</blockquote>
    </div>
    <div class="gallery">
        <?php
        $upload_dir = wp_upload_dir();
        $images = glob($upload_dir['basedir'] . '/images/*.{jpg,jpeg,png,gif,JPG,PNG,JPEG,GIF}', GLOB_BRACE);

        if ($images) {
            echo '<div class="gallery">'; 
            foreach ($images as $image) {
                echo '<div class="gallery-item">'; 
                echo '<img src="' . esc_url($upload_dir['baseurl'] . '/images/' . basename($image)) . '" alt="' . esc_attr(basename($image)) . '" onclick="openLightbox(this.src)" />';
                echo '</div>'; 
            }
            echo '</div>'; 
        } else {
            echo '<p>Không có ảnh nào được tải lên.</p>'; 
        }
        ?>
    </div>
    
    <!-- Lightbox container -->
    <div id="lightbox" style="display: none;" onclick="closeLightbox()">
        <span id="lightbox-close" style="position:absolute; top:10px; right:20px; font-size:30px; cursor:pointer;">&times;</span>
        <img id="lightbox-img" src="" alt="Lightbox Image" style="max-width: 90%; max-height: 90%; margin: auto; display: block;">
    </div>
</div>



<style>
   
</style>


<!-- menu -->
<nav class="navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" title="Home" href="https://istudy-tracnghiem.xyz/"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="About" href="https://istudy-tracnghiem.xyz/about/"><i class="fas fa-user"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Projects" href="https://istudy-tracnghiem.xyz/project/"><i class="fas fa-briefcase"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="My Photos" href="https://istudy-tracnghiem.xyz/photo/"><i class="fas fa-camera"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="My musics" href="https://istudy-tracnghiem.xyz/music/"><i class="fas fa-layer-group"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="My record" href="https://istudy-tracnghiem.xyz/record/"><i class="fas fa-microphone"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-chevron-up"></i></a>
            </li>
        </ul>
    </nav>
    <?php wp_footer(); ?>
</body>
</html>