<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 18.11.2017
 * Time: 18:55
 */
?>
<?php get_header(); ?>
<section class="singlePage">
<div class="singlePageContainer">
<h2>KONTAKT</h2>
<div class="blueLine"></div>
<div class="row">
    <div class="col-3-6">

        <?php

        $q = new WP_Query([
            'post_type' => 'post',
            'category_name' => 'contact',
            'posts_per_page' => 1,
        ]);

        if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
            <!-- post -->
                <div class="adressData sectionX">
<!--                    <p>--><?php //the_title()?><!-- </p>-->
<!--                    <div class="blueLine"></div>-->
                    <span><?php the_content() ?></span>
                </div>

        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif;

        ?>
    </div>
    <div class="col-3-6">
        <div id="map">
        </div>
    </div>
</div>

</section>

<?php get_footer(); ?>

