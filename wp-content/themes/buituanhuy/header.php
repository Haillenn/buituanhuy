<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="site-header">
    <div class="container">
        <div class="logo-header">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/img.png'); ?>" alt="Logo"">
            </a>
        </div>
        <div class="menu-header">
            <nav class="navbar">
                <ul class="menu">
                    <li class="dropdown">
                        <a href="<?php echo get_permalink(get_page_by_path('home-2')); ?>" class="active">Home <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)">Home 1</a></li>
                            <li><a href="javascript:void(0)">Home 2</a></li>
                            <li><a href="javascript:void(0)">Home 3</a></li>
                            <li><a href="javascript:void(0)">Home 4</a></li>
                            <li><a href="javascript:void(0)">Home 5</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo get_permalink(get_page_by_path('all-blog')); ?>">Case Studies <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)">Case Studies 1</a></li>
                            <li><a href="javascript:void(0)">Case Studies 2</a></li>
                            <li><a href="javascript:void(0)">Case Studies 3</a></li>
                            <li><a href="javascript:void(0)">Case Studies 4</a></li>
                            <li><a href="javascript:void(0)">Case Studies 5</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">Pages <i class="bi bi-chevron-down"></i></a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">Shop <i class="bi bi-chevron-down"></i></a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('all-blog')); ?>">Blog <i class="bi bi-chevron-down"></i></a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact </a></li>
                </ul>
            </nav>
        </div>

        <i class="bi bi-search" id="searchIcon"></i>
        <a href="<?php echo wp_login_url(); ?>" class="btn primary-btn sign-in">Sign in</a>
    </div>
</header>

<div id="searchModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Search</h2>
        <form id="searchForm">
            <input type="text" id="searchInput" placeholder="Type your search...">
            <button type="submit">Search</button>
        </form>
    </div>
</div>
</html>