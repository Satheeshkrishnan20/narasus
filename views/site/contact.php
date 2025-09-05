<?php
use yii\helpers\Html;
?>

<div class="category-section">
    <div class="container-lg p-4 d-flex justify-content-center gap-4">
        <?= Html::a('Coffee', ['site/Coffee'], ['class' => 'btn']) ?>
        <?= Html::a("Tea", ['site/Coffee'], ['class' => 'btn']) ?>
        <?= Html::a("Food", ['site/Coffee'], ['class' => 'btn']) ?>
        <?= Html::a('Rudram', ['site/Coffee'], ['class' => 'btn']) ?>
    </div>
</div>

<div class="container-lg mb-5">

    <div id="productCarousel" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row g-3 g-md-4">
                <div class="col-12 col-md-6">
                    <?= Html::img('@web/web/images/banner/banner.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 1']) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?= Html::img('@web/web/images/banner/banner-2.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 2']) ?>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row g-3 g-md-4">
                <div class="col-12 col-md-6">
                    <?= Html::img('@web/web/images/banner/banner.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 1']) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?= Html::img('@web/web/images/banner/banner-2.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 2']) ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


        <!-- Indicators -->

    </div>

    <div class="d-flex  justify-content-center align-items-center">
        <p class="banner-curosele-content text-center">Lorem ipsum dolor sit amet consectetur. Odio varius enim in in
            ac.
            Scelerisque netus aliquet fermentum nunc.</p>
    </div>


    <div class="home-product-section mt-5">
        <div class="title text-center">
            <h1>Best Seller</h1>
        </div>
        <div class="home-product-category d-flex justify-content-center gap-5">
            <button class="btn">Coffee Products</button>
            <button class="btn">Food Products</button>
            <button class="btn">Tea Products</button>
        </div>


<div class="container-lg product-curosele mt-5">

    <div class="owl-carousel owl-theme">
        <!-- Card-1 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>

    </div>
</div>


   

    <!-- subscription banner -->





    <div class="subscription-banner mt-5 position-relative">
        <?= Html::img('@web/web/images/banner/subscription.png', ['class' => 'w-100']) ?>
        <div class="d-flex flex-wrap banner-buttons position-absolute">
            <?= Html::a('Try Subscription', '', ['class' => 'btn']) ?>
            <?= Html::a('Learn More', '', ['class' => 'btn']) ?>
        </div>
    </div>



    <!-- Shop By Category -->

    <div class="text-center mt-5">

        <h1 class="shop-by-category-title">Shop by category</h1>
    </div>
    <div class="shop-by-category mt-5 d-flex gap-5 flex-wrap justify-content-center">
        <div class="category-card d-flex">
            <div class="category-card-name">
                <h1>coffee <br> Product</h1>
            </div>
            <div class="category-card-img">
                <?= Html::img('@web/web/images/category/coffee.png', ['class' => 'w-100']) ?>
            </div>
        </div>
        <div class="category-card d-flex">
            <div class="category-card-name">
                <h1>Tea <br> Product</h1>
            </div>
            <div class="category-card-img">
                <?= Html::img('@web/web/images/category/tea.png', ['class' => 'w-100']) ?>
            </div>
        </div>
        <div class="category-card d-flex">
            <div class="category-card-name">
                <h1>Food <br> Product</h1>
            </div>
            <div class="category-card-img">
                <?= Html::img('@web/web/images/category/food.png', ['class' => 'w-100']) ?>
            </div>
        </div>
        <div class="category-card d-flex">
            <div class="category-card-name">
                <h1>Rudhram <br> Product</h1>
            </div>
            <div class="category-card-img">
                <?= Html::img('@web/web/images/category/rudhram.png', ['class' => 'w-100']) ?>
            </div>
        </div>
    </div>



    <div class="first-order-banner mt-5">
        <div>
            <?= Html::img('@web/web/images/banner/subscription-2.png', ['class' => 'w-100']) ?>
        </div>
    </div>



    <!-- Perfect gift -->

    <div class="perfect-gift mt-5">


        <div class="text-center mb-5 perfect-gift-titile">
            <h1>Perfect gift For All</h1>
        </div>

        <div class=" w-100 d-flex justify-content-between gap-2">



            <div class="home-product-list">
                <div class="product-image-section">
                    <p class="best-selling">Best Selling</p>
                    <div class="product-image">
                        <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                    </div>
                </div>

                <div class="product-details-card">
                    <div class="product-details d-flex justify-content-between">
                        <div>
                            <h2 class="product-name">Udhayam</h2>
                            <p class="product-category">Filter Coffee</p>
                        </div>
                        <div>
                            <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                        </div>
                    </div>
                    <div class="product-price-details d-flex justify-content-between">
                        <div class="d-flex w-100 align-items-center">
                            <p class=" me-2 price">₹ 300</p>
                            <p class="mrp">M.R.P ₹399 </p>
                        </div>
                        <div class="d-flex">
                            <div class="decrement-icon">
                                <i class="fa-solid fa-less-than "></i>
                            </div>
                            <div class="product-varient">
                                <p>50 g</p>
                            </div>
                            <div class="increment-icon">
                                <i class="fa-solid fa-greater-than "></i>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="card-button">
                    <button class="w-100">Add to Cart</button>
                </div>

            </div>
            <div class="home-product-list">
                <div class="product-image-section">
                    <p class="best-selling">Best Selling</p>
                    <div class="product-image">
                        <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                    </div>
                </div>

                <div class="product-details-card">
                    <div class="product-details d-flex justify-content-between">
                        <div>
                            <h2 class="product-name">Udhayam</h2>
                            <p class="product-category">Filter Coffee</p>
                        </div>
                        <div>
                            <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                        </div>
                    </div>
                    <div class="product-price-details d-flex justify-content-between">
                        <div class="d-flex w-100 align-items-center">
                            <p class=" me-2 price">₹ 300</p>
                            <p class="mrp">M.R.P ₹399 </p>
                        </div>
                        <div class="d-flex">
                            <div class="decrement-icon">
                                <i class="fa-solid fa-less-than "></i>
                            </div>
                            <div class="product-varient">
                                <p>50 g</p>
                            </div>
                            <div class="increment-icon">
                                <i class="fa-solid fa-greater-than "></i>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="card-button">
                    <button class="w-100">Add to Cart</button>
                </div>

            </div>
            <div class="home-product-list">
                <div class="product-image-section">
                    <p class="best-selling">Best Selling</p>
                    <div class="product-image">
                        <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                    </div>
                </div>

                <div class="product-details-card">
                    <div class="product-details d-flex justify-content-between">
                        <div>
                            <h2 class="product-name">Udhayam</h2>
                            <p class="product-category">Filter Coffee</p>
                        </div>
                        <div>
                            <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                        </div>
                    </div>
                    <div class="product-price-details d-flex justify-content-between">
                        <div class="d-flex w-100 align-items-center">
                            <p class=" me-2 price">₹ 300</p>
                            <p class="mrp">M.R.P ₹399 </p>
                        </div>
                        <div class="d-flex">
                            <div class="decrement-icon">
                                <i class="fa-solid fa-less-than "></i>
                            </div>
                            <div class="product-varient">
                                <p>50 g</p>
                            </div>
                            <div class="increment-icon">
                                <i class="fa-solid fa-greater-than "></i>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="card-button">
                    <button class="w-100">Add to Cart</button>
                </div>

            </div>


        </div>
        <!-- Card End -->

    </div>
    <div class="bottom-banner d-flex justify-content-center mt-5 flex-wrap gap-4">
        <div class="app-download-banner">
            <div>
                <?= Html::img('@web/web/images/banner/app-banner.png', ['class' => 'w-100']) ?>
            </div>
            <div>
                <button></button>
                <button></button>
            </div>
        </div>

        <div class="bottom-gift-card">
            <div>
                <?= Html::img('@web/web/images/banner/bottom-gift-banner.png', ['class' => 'w-100']) ?>
            </div>
        </div>
    </div>





</div>

<div class="partner">
    <div class="partner-title text-center mb-5">
        <h1>Valuable Partners</h1>
    </div>
    <div class="partner-logo mb-5">
        <div class="logo container-lg d-flex justify-content-evenly align-items-center gap-4 ">
            <?= Html::img('@web/web/images/partner/partner1.png') ?>
            <?= Html::img('@web/web/images/partner/partner2.png') ?>
            <?= Html::img('@web/web/images/partner/partner3.png') ?>
            <?= Html::img('@web/web/images/partner/partner4.png') ?>
            <?= Html::img('@web/web/images/partner/partner5.png') ?>
        </div>
    </div>
</div>
</div>






</div>


<div class="container-lg product-curosele">

    <div class="owl-carousel owl-theme">
        <!-- Card-1 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>
        <!-- Card-2 -->
        <div class="home-product-list">
            <div class="product-image-section">
                <p class="best-selling">Best Selling</p>
                <div class="product-image">
                    <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                </div>
            </div>

            <div class="product-details-card">
                <div class="product-details d-flex justify-content-between">
                    <div>
                        <h2 class="product-name">Udhayam</h2>
                        <p class="product-category">Filter Coffee</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-heart fa-1xl wishlist-icon"></i>
                    </div>
                </div>
                <div class="product-price-details d-flex justify-content-between">
                    <div class="d-flex w-100 align-items-center flex-wrap">
                        <p class=" me-2 price mb-0 ">₹ 300</p>
                        <p class="mrp mb-0">M.R.P ₹399 </p>
                    </div>
                    <div class="d-flex">
                        <div class="decrement-icon">
                            <i class="fa-solid fa-less-than "></i>
                        </div>
                        <div class="product-varient">
                            <p>50 g</p>
                        </div>
                        <div class="increment-icon">
                            <i class="fa-solid fa-greater-than "></i>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-button">
                <button class="w-100">Add to Cart</button>
            </div>

        </div>

    </div>
</div>






<script>
    $('.owl-carousel').owlCarousel({
        center: true,
        // items: 2,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
         responsive:{
            0:{ items:1 },       // Mobile
            576:{ items:2 },     // Small/Medium
            992:{ items:3 }      // Large
        }
    });
    $(".custom-next").click(function () {
        owl.trigger("next.owl.carousel");
    });
    $(".custom-prev").click(function () {
        owl.trigger("prev.owl.carousel");
    });
</script>


<style>
    .product-curosele {
        margin-bottom: 100px;
    }

    .owl-nav button.owl-prev,
    .owl-nav button.owl-next {
        background: #808080 !important;
        /* Violet */
        color: #fff !important;
        border: none;
        border-radius: 50% !important;
        width: 40px;
        height: 40px;
        font-size: 25px !important;
        font-weight: bolder !important;
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        cursor: pointer;

    }

    .owl-nav button.owl-prev {
        left: -70px;
        /* Move left */
    }

    .owl-nav button.owl-next {
        right: -50px;
        /* Move right */
    }

    .owl-nav button.owl-prev:hover,
    .owl-nav button.owl-next:hover {
        background: #2225c7ff !important;
        /* Change color on hover */
        transform: translateY(-50%) scale(1.1);
        /* Slight zoom */
    }

    /*  */
    /* Make images look great */
.banner-img {
    object-fit: cover;
    border-radius: 12px;
    max-height: 400px; /* Adjust if needed */
}

/* Optional: Adjust carousel button size */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 50% 50%;
    width: 40px;
    height: 40px;
}

</style>