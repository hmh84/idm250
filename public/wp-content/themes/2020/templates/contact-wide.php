<?php
/*
Template Name: Contact Wide
*/
get_header();?>
<main>
    <section class="contact" id="contact-wide">
        <h1><?php the_title(); ?></h1>
        <div class="block-wrap">
            <div class="block">
                <form class="contact-form" action="_self" method="post">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit">Send</button>
                </form>
            </div>
        </div>
    </section>
</main>

<div id="modal" <?php if (isset($_GET["mailsent"])) {echo 'style="display: flex"';} else { echo 'style="display: none"';} ?>>
    <div id="modal-main">
        <h2>Your message has been sent.</h2>
        <br>
        <p>Only Friend will get back to you at the soonest convenience.</p>
        <br>
        <a href="index.php">Return Home</a>
    </div>
</div>

<?php get_footer(); ?>