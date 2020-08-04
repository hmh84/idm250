<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only Friend</title>
    <!-- Set Current Directory Variable -->
        <script>var current_dir = 'contact.php';</script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <?php include_once 'include/favicons.php'; ?>
</head>
<body <?php if (isset($_GET["mailsent"])) { echo 'style="overflow: hidden"'; } ?> >
    <?php include_once 'include/header.php'; ?>

    <main>

        <section id="contact">
            <div class="block">
                <h1>Get in Touch</h1>
                <form id="contact-form" action="include/contact-handler.php" method="post">
                    <input type="text" name="name" placeholder="Full Name" required maxlength="25">
                    <input type="text" name="email" placeholder="Email" required maxlength="25">
                    <input type="text" name="subject" placeholder="Subject" required maxlength="25">
                    <textarea name="message" placeholder="Message" required maxlength="500"></textarea>
                    <button type="submit" name="submit">SEND</button>
                </form>
            </div>
        </section>
    </main>

    <div id="modal" <?php if (isset($_GET["mailsent"])) { echo 'style="display: flex"'; } else { echo 'style="display: none"'; } ?> >
        <div id="modal-main">
            <h2>Your message has been sent.</h2>
            <br>
            <p>Only Friend will get back to you at the soonest convenience.</p>
            <br>
            <a href="index.php">Return Home</a>
        </div>
    </div>

    <?php include_once 'include/footer.php'; ?>
</body>

<?php include_once 'include/scripts.php'; ?>

</html>