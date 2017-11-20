<?php get_header(); ?>
<div class="row front">


            <?php

            $q = new WP_Query([
                'post_type' => 'post',
                'category_name' => 'frontpage',
                'posts_per_page' => 3,
                'orderby' => 'title',
                'order' => 'ASC',
            ]);

            if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
                <!-- post -->
                    <div class="col-2-6 main">
                        <div class="sectionX">
                            <h2><?php the_title()?> </h2>
                            <div class="blueLine"></div>
                            <span><?php the_excerpt() ?></span>
                        </div>
                    </div>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif;

            ?>
</div>
<?php get_footer(); ?>

