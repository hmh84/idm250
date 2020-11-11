<?php
/*
Template Name: Contact
*/
get_header();?>
<main>
    <section class="contact">
        <h1><?php the_title(); ?></h1>
        <div class="block-wrap">
            <div class="block">
                <form class="contact-form" action="<?php get_template_directory(); ?>/includes/contact-handler.php" method="post">
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

<div id="modal" <?php if (isset($_GET["mailsent"])) { echo 'style="display: flex"'; } else { echo 'style="display: none"'; } ?> >
    <div id="modal-main">
        <h2>Your message has been received.</h2>
        <br>
        <p>Only Friend will get back to you at the soonest convenience.</p>
        <br>
        <a href="index.php">Return Home</a>
    </div>
</div>
<?php get_footer(); ?>