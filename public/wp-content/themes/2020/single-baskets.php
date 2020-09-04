<?php
/**
 * The template for displaying all project posts.
 *
 */

$basket_price = get_field('basket_price') ?: 'Your price here...';
?>
<?php get_header();?>
<main>
    <section class="single">
        <h1><?php the_title(); ?></h1>
        <div class="block-wrap">
        <?php while (have_posts()) : the_post(); ?>
            <div class="block">
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?>
                <p><?php echo $basket_price; ?></p>
            </div>
            <div class="block">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>