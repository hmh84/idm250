<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="graphics/favicons/apple-touch-icon.png">
        <!-- <link rel="icon" type="image/png" sizes="32x32" href="graphics/favicons/favicon-32x32.png"> -->
        <!-- <link rel="icon" type="image/png" sizes="16x16" href="graphics/favicons/favicon-16x16.png"> -->
        <!-- <link rel="manifest" href="graphics/favicons/site.webmanifest"> -->
        <link rel="mask-icon" href="graphics/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="nav-top">
        <a href="/">
            <img id="header-img" src="<?php echo get_template_directory_uri() ?>/graphics/favicons/favicon.svg" alt="Logo">
        </a>
        <h2 id="header-text"><?php bloginfo('name'); ?></h2>
        <button id="header-btn">
            <span></span>
            <span id="span-1"></span>
        </button>
    </div>
    <div class="nav-content btm-shadow">
        <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
        <form id="search" method="GET" action="gallery.php">
            <input id="search-input" type="search" name="search" placeholder="Search">
            <button id="search-btn" type="submit">Go</button>
        </form>
    </div>
</header>
<!-- <div id="backdrop"></div> -->
