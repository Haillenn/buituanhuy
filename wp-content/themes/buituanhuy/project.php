<?php
/*
Template Name: Project Page
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
</head>

<body <?php body_class(); ?>>

<div class="content" id="content">
    <div class="projectTitle">
    	<h2 style="font-weight: bold;">Dự án</h2>
    	<blockquote>Những dự án lập trình của tớ</blockquote>
    </div>
 <div class="container mt-5">
        <div class="project-card">
            <div class="d-flex justify-content-between">
                <div>
                    <div class="project-title">Fita Test</div>
                    <div class="project-description">Website Thi trắc nghiệm - FitaTest.</div>
                    <div class="project-link">Link: <a target="_blank" href="https://buituanhuy.i-tracnghiem.com">Website Trắc nghiệm</a></div>
                    <div class="mt-2">
                        <span class="badge bg-success">PHP</span>
                        <span class="badge bg-warning text-dark"><a href="https://istudy-tracnghiem.xyz/contact/">Chi tiết</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-card">
		    <div class="d-flex justify-content-between">
		        <div>
		            <div class="project-title">Ôn thi đánh giá năng lực - Hattik</div>
		            <div class="project-description">Ôn thi đánh giá năng lực - Hattik.</div>
		            <div class="project-link">Link: <a target="_blank" href="https://demo.hattik.com/">Ôn thi đánh giá năng lực - Hattik</a></div>
		            <div class="mt-2">
		                <span class="badge bg-success">PHP</span>
		                <span class="badge bg-warning text-dark"><a href="https://istudy-tracnghiem.xyz/contact/">Chi tiết</a></span>
		            </div>
		        </div>
		    </div>
		</div>
        <div class="project-card">
            <div class="d-flex justify-content-between">
                <div>
                    <div class="project-title">AI Intellicon</div>
                    <div class="project-description">Website clone AI Intellicon</div>
                    <div class="project-link">Link: <a target="_blank" href="https://buituanhuy.i-tracnghiem.com/buituanhuy/">AI Intellicon</a></div>
                    <div class="mt-2">
                        <span class="badge bg-success">PHP</span>
                        <span class="badge bg-warning text-dark"><a href="https://istudy-tracnghiem.xyz/contact/">Chi tiết</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-card">
            <div class="d-flex justify-content-between">
                <div>
                    <div class="project-title">Bui Tuan Huy - My Blog</div>
                    <div class="project-description">Blog cá nhân</div>
                    <div class="project-link">Link: <a target="_blank" href="https://istudy-tracnghiem.xyz">Bui Tuan Huy - My Blog</a></div>
                    <div class="mt-2">
                        <span class="badge bg-success">PHP</span>
                        <span class="badge bg-warning text-dark"><a href="https://istudy-tracnghiem.xyz/contact/">Chi tiết</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

