<?php
/*
Template Name: Default Archive
*/
$post_type_name = strtolower(get_the_title());
$post_type_name_singular = ucfirst(substr_replace($post_type_name ,"",-1));
get_header();?>
    <main>
        <section class="<?php echo $post_type_name?>">
            <h1><?php the_title(); ?></h1>
            <div class="block-wrap">
                <?php
                if ( get_query_var('paged') ) $paged = get_query_var('paged');
                if ( get_query_var('page') ) $paged = get_query_var('page');
            
                $query = new WP_Query( array( 'post_type' => $post_type_name, 'paged' => $paged ) );
            
                if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="block">
                                <h2><?php the_title(); ?></h2>
                                <div class="img-area">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <?php the_excerpt(); ?>
                                <a class="contains-button" href="<?php the_permalink(); ?>">
                                    <button>View this <?php echo $post_type_name_singular; ?></button>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <!-- show pagination here -->
                    <?php else : ?>
                        <!-- show 404 error here -->
                <?php endif; ?>
                
            </div>
        </section>
    </main>
<?php get_footer(); ?>