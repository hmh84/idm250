<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <?php include_once 'include/favicons.php'; ?>
</head>
<body>
    <main>
        <h1>Uh oh, looks like we couldn't find that one..</h1>
        <a href="index.php">Return Home</a>
    </main>

    <?php include_once 'include/footer.php'; ?>
</body>
<style>
    body {
        background: var(--gradient-pink);
        height: 100vh;
    }

    main {
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