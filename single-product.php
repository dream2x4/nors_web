<body id="single-product-page">
    

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>


<div class="product-detail-container d-flex flex-column align-items-center">
    
    <div class="container d-flex col-10">
        <h1 class="product-title-outer" style="padding-bottom: 1rem;"> <?php the_field('product_name'); ?> </h1>
    </div>

    <div class="container-scalable col-10 d-flex justify-content-center">
        
        <div class="inner-product-detail-container-left">
            
            <!-- <img src="<?php echo get_field('product_img'); ?>" alt="A image of the product" style="height: auto; width: 300px;"> -->

            <!-- Product preview -->
            <div id="carouselImageIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselImageIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselImageIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselImageIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo get_field('product_image_1'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo get_field('product_image_2'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo get_field('product_image_3'); ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImageIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImageIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

            <div class="detail-description" style="padding-top: 5%">
            <p><span>Om smykket: </span></p>
            <p> <?php the_field('product_description'); ?> </p>
            </div>
        </div>
        <div class="inner-product-detail-container-right">
            <h1 class="product-title-inner"> <?php the_field('product_name'); ?> </h1>
            <h3> <?php the_field('product_price'); ?> </h3>
            <p><span>Matriale: </span><?php the_field('product_material'); ?> </p>
            <p><span>Størrelse: </span><?php the_field('product_size'); ?> </p>
            <hr>
            <p style="margin-bottom: 2rem;"><span>Vedligeholdelse: </span><?php the_field('product_maintenance'); ?> </p>
            <a href="#footer"><button class="buy btn-color-reverse">KONTAKT FOR KØB</button></a>
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>


</body>
<?php get_footer(); ?>
