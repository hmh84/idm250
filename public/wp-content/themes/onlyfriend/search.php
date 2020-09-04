<?php get_header(); ?>
<main>
    <section>
    <!-- Results -->
        <?php if (have_posts()): ?>
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
            <h2>Sorry, there are no results.</h2>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>