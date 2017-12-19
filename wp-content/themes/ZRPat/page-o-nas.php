<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 19.11.2017
 * Time: 02:20
 */
?>

<?php get_header(); ?>
<section class="singlePage">
    <div class="singlePageContainer">
        <h2>ZESPÓŁ RZECZNIKÓW PATENTOWYCH</h2>
        <div class="blueLine"></div>
        <?php

        $q = new WP_Query([
            'post_type' => 'post',
            'category_name' => 'about',
            'posts_per_page' => 1,
            'order' => 'ASC',

        ]);

        if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
            <!-- post -->
            <div class="row">
                <div class="col-6-6">
                    <div class="sectionX att">
                        <h2><?php the_title()?> </h2>
                        <h2><?php the_post_thumbnail(); ?></h2>
                        <span><?php the_content() ?></span>
                    </div>
                </div>
            </div>
            <br>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif;

        ?>
    </div>
    <?php get_footer(); ?>

