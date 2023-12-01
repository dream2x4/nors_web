<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<div class="products-hero" style="background-image: url('<?php the_field('products_hero_img'); ?>');">
</div>

<div class="products-title d-flex flex-column justify-content-center align-items-center">
    <h1> <?php the_field('products_title'); ?> </h1>
</div>

<div style="background-color: #EFEBE5;">
    <?php
        $product = new WP_Query(
            array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
            )
        );
    ?>

    <div class="d-flex flex-wrap"; style="background-color: #EFEBE5; padding: 0 2px;">
        <?php while($product->have_posts()): $product->the_post() ?>
            <a href="<?php the_permalink() ?>" class="product-preview d-flex flex-column justify-content-center align-items-center text-center" style="width: 25%; padding: 2px;">
                <p class="product-text" style="z-index: 1; position: absolute;">SE MERE...</p>
                <img class="product-img" src="<?php the_field('product_img'); ?>" alt="" style="width: 100%; height: auto; background-image: url('<?php the_field('product_img'); ?>');">
            </a>
        <?php endwhile ?>
    </div>
</div>

<div style="height: 25vh; background-color: #EFEBE5;"></div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>