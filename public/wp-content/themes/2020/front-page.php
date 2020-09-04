<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 * Set this in settings > reading > static page
 *
 */
get_header(); ?>
    <main>
        <?php //the_content(); ?>
        <?php get_template_part('components/sections/hero'); ?>
        <?php get_template_part('components/sections/steps'); ?>
        <?php get_template_part('components/sections/featured'); ?>
        <?php get_template_part('components/sections/moments'); ?>
    </main>
<?php get_footer(); ?>