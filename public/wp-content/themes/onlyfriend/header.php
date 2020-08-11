<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care by Kay & Jay</title>
    <?php wp_head(); ?>
    <!-- Set Current Directory Variable -->
        <script>var current_dir = 'index.php';</script>
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
  <div class="container header__content">
    <!-- <img class="header__logo" src="https://placehold.it/500x60" alt="This is the logo"> -->

    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
  </div>
</header>
<!-- <div id="backdrop"></div> -->
