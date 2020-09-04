<?php
    if ( get_query_var('paged') ) $paged = get_query_var('paged');
    if ( get_query_var('page') ) $paged = get_query_var('page');

    $query = new WP_Query( array( 'post_type' => 'baskets', 'paged' => $paged, 'tag' => 'featured', ) );

    if ( $query->have_posts() ) : ?>
    <section class="curated">
        <div class="block-wrap">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="block">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <p><?php the_excerpt(); ?></p>
                <a class="contains-button" href="<?php the_permalink(); ?>">
                    <button>Choose this Basket</button>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
            <!-- show pagination here -->
        <?php else : ?>
            <!-- show 404 error here -->
<?php endif; ?>