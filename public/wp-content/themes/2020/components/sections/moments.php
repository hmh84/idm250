<?php
    if ( get_query_var('paged') ) $paged = get_query_var('paged');
    if ( get_query_var('page') ) $paged = get_query_var('page');

    $query = new WP_Query( array( 'post_type' => 'moments', 'paged' => $paged, 'tag' => 'featured', ) );

    if ( $query->have_posts() ) : ?>
    <section class="moments">
        <div class="block-wrap">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="block">
                <h2><?php the_title(); ?></h2>
                <div class="img-area">
                    <?php the_post_thumbnail(); ?>
                </div>

                <?php the_excerpt(); ?>
                <a class="contains-button" href="<?php the_permalink(); ?>">
                    <button>See the Difference</button>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
            <!-- show pagination here -->
        <?php else : ?>
            <!-- show 404 error here -->
<?php endif; ?>