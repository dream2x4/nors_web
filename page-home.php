<body id="home">
    

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!-- Hero -->
<div class="home-hero d-flex justify-content-center align-items-center" style="background-image: url('<?php the_field('hero_img'); ?>');">
    <div class="container col-10">
        <div class="home-hero-container">
            <h1> <?php the_field('hero_title'); ?> </h1>
            <p style="margin-bottom: 4rem;"> <?php the_field('hero_description'); ?> </p>
            <div class="hero-btn-container" style="flex-wrap: wrap;">
                <a href="https://nors.mariewium.dk/products" style="margin-right: 2rem;"><button>SE PRODUKTER</button></a>
                <a href="#about_nors"><button>OM NORS ▼</button></a>
            </div>
        </div>
    </div>
</div>

<!-- About Nors -->

<div class="about-nors-container d-flex justify-content-center align-items-center" id="about_nors">
    <div class="container col-10">
        <div class="about-nors-container-scalable d-flex" style="row-gap: 4rem">
            <div class="about-nors-inner-container">
                <h2> <?php the_field('about_nors_title'); ?> </h2>
                <p style="margin-bottom: 4rem;"> <?php the_field('about_nors_description'); ?> </p>
                <a href="#about_products"><button class="btn-color-reverse">LÆS MERE ▼</button></a>
            </div>
            <div class="about-nors-img-container">
                <img src="<?php the_field('about_nors_image'); ?>" class="about-nors-img" alt="">
            </div>
        </div>
    </div>
</div>

<!-- About Products -->

<div class="about-products-container d-flex justify-content-center align-items-center" id="about_products">
    <div class="container-scalable col-10 d-flex" style="row-gap: 4rem">
        <div class="container">
            <h2> <?php the_field('about_products_title_1'); ?> </h2>
            <p style="margin-bottom: 4rem;"> <?php the_field('about_products_description_1'); ?> </p>
            <a href="https://nors.mariewium.dk/products"><button>SE PRODUKTER</button></a>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <img src="<?php the_field('about_products_img'); ?>" class="about-products-img" alt="" style="width: 75%; height: auto;">
        </div>
        <div class="container">
            <h2> <?php the_field('about_products_title_2'); ?> </h2>
            <p> <?php the_field('about_products_description_2'); ?> </p>
            <h2> <?php the_field('about_products_title_3'); ?> </h2>
            <p> <?php the_field('about_products_description_3'); ?> </p> 
        </div>
    </div>
</div>

<!-- Current Vendors -->

<div class="about-vendors-container d-flex justify-content-center align-items-center">
    <div class="container col-10">
        <h2><?php the_field('home_vendor_title'); ?></h2>

        <?php // Query for current vendors, that only shows relelant ones (those in the future) and in ascending order
        $current_vendor = new WP_Query(
            array(
                'post_type'      => 'current_vendor',
                'posts_per_page' => -1,
                'meta_key'       => 'vendor_date',
                'orderby'        => 'meta_value', // Order by custom field value
                'order'          => 'ASC',        // Order in ascending (earliest first)
                'meta_query'     => array(
                    array(
                        'key'     => 'vendor_date',
                        'value'   => date('Y-m-d'), // Show dates in the future
                        'compare' => '>=', // Compare to today's date
                        'type'    => 'DATE', 
                    ),
                ),
            )
        );
        ?>

        <div class="vendor-cards d-flex flex-column flex-wrap gap-3">
            <?php while ($current_vendor->have_posts()) : $current_vendor->the_post(); ?>

                <div class="single-vendor-card">
                    <div class="container">
                        <p class=""><?php the_field('vendor_date'); ?></p>
                        <h2><?php the_field('vendor_location'); ?></h2>
                        <p><?php the_field('vendor_description'); ?></p>
                    </div>
                 </div>

            <?php endwhile; ?>
        </div>
        
        <?php wp_reset_postdata(); ?>
    </div>
</div>


<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

</body>

<?php get_footer(); ?>