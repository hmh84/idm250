<header>
    <nav>
        <button id="menu-btn">
            <span></span>
            <span id="span-1"></span>
        </button>
        <ul>
            <a href="index.php" rel="noopener noreferrer">
                <li id="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/graphics/favicons/favicon.svg" alt="Logo">
                    <h2 id="header-text">Only Friend</h2>
                </li>
            </a>
        </ul>
        <div class="btm-shadow" id="nav-list" style="display: none; top: -420px">
            <a href="index.php" rel="noopener noreferrer"><li>Home</li></a>
            <a href="build.php" rel="noopener noreferrer"><li>Build a Basket</li></a>
            <a href="gallery.php" rel="noopener noreferrer"><li>Gallery</li></a>
            <a href="contact.php" rel="noopener noreferrer"><li>Contact</li></a>
                <form id="search" method="GET" action="gallery.php">
                    <input id="search-input" type="search" name="search" placeholder="Search">
                    <button id="search-btn" type="submit">Go</button>
                </form>
        </div>
    </nav>
</header>
<div id="backdrop" style="display: none;"></div>