<?php get_header(); ?>
<script>var current_dir = '404.php';</script>
<body>
    <main style="min-height: calc(100vh - 119px);">
        <h1>Uh oh, looks like we couldn't find that one..</h1>
        <a href="index.php">Return Home</a>
    </main>

    <?php get_footer(); ?>
</body>
<style>
    main {
        background: var(--gradient-pink);
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-top: 35vh;
    }

    main h1 {
        font-size: 2.25rem;
        margin-bottom: 2rem;
    }

    main a {
        text-decoration: underline !important;
        transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
        width: fit-content;
        margin: auto;
        padding: .5rem 1rem;
    }

    main a:hover {
        color: var(--red);
    }

    footer {
        position: fixed;
        bottom: 0;
        left: 0;
    }
</style>
</html>