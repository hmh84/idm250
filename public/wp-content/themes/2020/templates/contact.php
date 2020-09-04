<?php
/*
Template Name: Contact Wide
*/
get_header();?>
<main>
    <section class="single">
        <h1><?php the_title(); ?></h1>
        <div class="block-wrap">
        <?php while (have_posts()) : the_post(); ?>
            <div class="block">
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?>
            </div>
            <div class="block">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>