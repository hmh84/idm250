<?php
$the_content = apply_filters('the_content', get_the_content());
$basket_price = get_field('basket_price');
get_header();?>
<main>
    <section class="<?php echo get_post_type($post_id); ?>">
        <h1><?php the_title(); ?></h1>
        <div class="block-wrap">
        <?php while (have_posts()) : the_post(); ?>
            <div class="block">
                <div class="img-area">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php if (!$basket_price == '') {the_excerpt();} ?>
                <p><?php if (!$basket_price == '') {echo '$'.$basket_price;} ?></p>
            </div>
            <?php
                if ( !empty($the_content) ) {
                    echo '<div class="block">';
                        echo $the_content;
                    echo '</div>';
                }
            ?>
        <?php endwhile; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>