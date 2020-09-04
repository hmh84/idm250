<?php get_header(); ?>
<main>
    <section>
        <?php if (have_posts()): ?>
        <h1>Here's what we found for "<?php the_search_query(); ?>"...</h1>
        <div class="block-wrap">
        <!-- Results -->
                <?php while (have_posts()) : the_post(); ?>
                    <div class="block">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail(); ?>
                        <p><?php the_excerpt(); ?></p>
                        <a class="contains-button" href="<?php the_permalink(); ?>">
                            <button>Choose this Basket</button>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <h1>Sorry, we couldn't find anything for "<?php the_search_query(); ?>"...</h1>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>