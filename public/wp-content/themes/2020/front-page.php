<?php get_header(); ?>
    <main>
        <?php //the_content(); ?>
        <?php get_template_part('components/sections/hero'); ?>
        <?php get_template_part('components/sections/steps'); ?>
        <?php get_template_part('components/sections/featured'); ?>
        <?php get_template_part('components/sections/moments'); ?>
    </main>
<?php get_footer(); ?>