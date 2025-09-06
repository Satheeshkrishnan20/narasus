<?php
use yii\helpers\Html;
?>



<div class="home-product-section mt-5">
    <div class="title text-center">
        <h1>Best Seller</h1>
    </div>
</div>


<div class="container-md mt-5">

    <div class="d-flex justify-content-evenly nav-buttons">
        <ul class="nav nav-pills mb-3 row " id="pills-tab" role="tablist">
            <li class="nav-item col-4" role="presentation">
                <button class="nav-link active  text-center" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Coffee Products</button>
            </li>
            <li class="nav-item col-4" role="presentation">
                <button class="nav-link  text-center" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Food Products</button>
            </li>
            <li class="nav-item col-4" role="presentation">
                <button class="nav-link  text-center" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">Tea Products</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="curosele-container">
                <div class="container-lg product-curosele mt-4 px-3 px-lg-0 ">
                    <div class="owl-carousel owl-theme">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class=" ">
                                <div class="product-card">
                                    <div class="best-seller-top">
                                        <p>Best Seller</p>
                                    </div>
                                    <div class="product-img">
                                        <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                                    </div>
                                    <div class="product-details-container bg-white">

                                        <div class="product-content">
                                            <div class="px-3 mb-1">
                                                <div class="container-1 d-flex justify-content-between pt-2">
                                                    <div>
                                                        <h2>Udhayam</h2>
                                                    </div>
                                                    <div><i class="fa-regular fa-heart fa-1xl wishlist-icon"></i></div>
                                                </div>
                                                <div class='mb-3 container-1-category'>
                                                    <p>Filter Coffee</p>
                                                </div>
                                                <div class="container-2 d-flex justify-content-between ">
                                                    <div class="d-flex align-items-center">
                                                        <h3 class="me-2">₹ 300</h3>
                                                        <p class="mrp ">M.R.P ₹399</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-decrement lesser">
                                                            <i class="fa-solid fa-less-than "></i>

                                                        </div>
                                                        <div>
                                                             <input type="text"  readonly value="100 g" class="product-input">
                                                            <!-- <p class="mx-2">50 g</p> -->
                                                        </div>
                                                        <div class="product-increment greater">

                                                            <i class="fa-solid fa-greater-than "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-to-cart-btn">
                                                <button class='add-to-cart-btn-1 w-100 btn-custom py-2'>Add to Cart <span>₹
                                                        300</span></button>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <div class="px-3 py-2">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div class='add-to-cart-btn-back'>
                                                        <i class="fa-solid fa-less-than"></i>
                                                    </div>
                                                    <div>
                                                        <a href="">See Full Details</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <label><input type="radio" class="me-1"> One Time Purchase</label>
                                                    <label><input type="radio" class="me-1"><span class="product-overlay-top">Subscribe
                                                            and Save</span>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-decrement lesser">

                                                            <i class="fa-solid fa-less-than "></i>
                                                        </div>
                                                        <div>

                                                            <input type="text"  readonly value="100 g" class="product-input">
                                                        </div>
                                                        <div class="product-increment greater">

                                                            <i class="fa-solid fa-greater-than "></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-decrement sub">

                                                            <i class="fa-solid fa-minus "></i>
                                                        </div>
                                                        <div>

                                                            <input type="text"  readonly value="1" class="product-input product-quantity">
                                                        </div>
                                                        <div class="product-increment add">

                                                            <i class="fa-solid fa-plus "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="final-button">
                                                <button class='add-to-cart-btn-2 btn-custom w-100 py-2'>Add to Cart <span>₹
                                                        300</span></button>
                                            </div>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="product-cart">
                                                <div class="px-3 py-2">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class='product-overlay-back'>
                                                            <i class="fa-solid fa-less-than"></i>
                                                        </div>
                                                        <div>
                                                            <a href="">See Full Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label><input type="radio" class="me-1"> One Time Purchase</label>
                                                        <!-- <input type="radio" name="" id=""> <span id='product-overlay'>Subscribe and Save</span> -->
                                                        <label><input type="radio" class="me-1"> <span id=''>Subscribe and Save</span>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="product-decrement lesser">

                                                                <i class="fa-solid fa-less-than"></i>
                                                            </div>
                                                            <div>

                                                                <input type="text"  readonly value="100 g" class="product-input">
                                                            </div>
                                                            <div class="product-increment greater">

                                                                <i class="fa-solid fa-greater-than"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="product-decrement sub">

                                                                <i class="fa-solid fa-minus"></i>
                                                            </div>
                                                            <div> 
                                                               
                                                                <input type="text"  readonly value="100 g" class="product-input product-quantity">
                                                            </div>
                                                            <div class="product-increment add">

                                                                <i class="fa-solid fa-plus"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="subscription-tab">
                                                        <ul class="nav nav-tabs row " id="myTab" role="tablist">
                                                            <li class="nav-item one col" role="presentation">
                                                                <button class="nav-link active w-100" id="home-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#home"
                                                                    type="button" role="tab" aria-controls="home"
                                                                    aria-selected="true">Monthly
                                                                    Subscription</button>
                                                            </li>
                                                            <li class="nav-item col" role="presentation">
                                                                <button class="nav-link w-100" id="profile-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#profile"
                                                                    type="button" role="tab" aria-controls="profile"
                                                                    aria-selected="false">Prepaid
                                                                    Subscription</button>
                                                            </li>

                                                        </ul>
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active px-3 py-2" id="home"
                                                                role="tabpanel" aria-labelledby="home-tab">
                                                                <div>
                                                                    <input type="radio" name="" id="" class="me-1">
                                                                    <span>Monthly Subscription (5% off)</span>
                                                                </div>
                                                                <div>
                                                                    <ul>
                                                                        <li>Initial purchase 5% offer (1st month)</li>
                                                                        <li>Repeating purchase 10% offer (Recurring month)
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade px-3 py-2" id="profile"
                                                                role="tabpanel" aria-labelledby="profile-tab">
                                                                <div>
                                                                    <div class='mb-1'>
                                                                        <input type="radio" name="" id="" class="me-1">
                                                                        <span>3 Months prepaid Subscription (10% off)</span>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" name="" id="" class="me-1">
                                                                        <span>6 Months prepaid Subscription (15% off)</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="final-button">
                                                    <button class='add-to-cart-btn-2 btn-custom w-100 py-2'>Add to Cart
                                                        <span>₹
                                                            300</span></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>


                    </div>


                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="curosele-container">
                <div class="container-lg product-curosele mt-5 px-3 px-lg-0 ">
                    <div class="owl-carousel owl-theme">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class=" ">
                                <div class="product-card">
                                    <div class="best-seller-top">
                                        <p>Best Seller</p>
                                    </div>
                                    <div class="product-img">
                                        <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                                    </div>
                                    <div class="product-details-container bg-white">

                                        <div class="product-content">
                                            <div class="px-3 mb-1">
                                                <div class="container-1 d-flex justify-content-between pt-2">
                                                    <div>
                                                        <h2>Udhayam</h2>
                                                    </div>
                                                    <div><i class="fa-regular fa-heart fa-1xl wishlist-icon"></i></div>
                                                </div>
                                                <div class='mb-3 container-1-category'>
                                                    <p>Filter Coffee</p>
                                                </div>
                                                <div class="container-2 d-flex justify-content-between ">
                                                    <div class="d-flex align-items-center">
                                                        <h3 class="me-2">₹ 300</h3>
                                                        <p class="mrp ">M.R.P ₹399</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-decrement lesser">
                                                            <i class="fa-solid fa-less-than "></i>

                                                        </div>
                                                        <div>

                                                            <p class="mx-2">50 g</p>
                                                        </div>
                                                        <div class="product-increment greater">

                                                            <i class="fa-solid fa-greater-than "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-to-cart-btn">
                                                <button class='add-to-cart-btn-1 w-100 btn-custom py-2'>Add to Cart <span>₹
                                                        300</span></button>
                                            </div>
                                        </div>
                                        <div class="product-cart">
                                            <div class="px-3 py-2">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div class='add-to-cart-btn-back'>
                                                        <i class="fa-solid fa-less-than"></i>
                                                    </div>
                                                    <div>
                                                        <a href="">See Full Details</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <label><input type="radio" class="me-1"> One Time Purchase</label>
                                                    <label><input type="radio" class="me-1"><span class="product-overlay-top">Subscribe
                                                            and Save</span>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-decrement lesser">

                                                            <i class="fa-solid fa-less-than "></i>
                                                        </div>
                                                        <div>

                                                            <p class="mx-2">50 g</p>
                                                        </div>
                                                        <div class="product-increment greater">

                                                            <i class="fa-solid fa-greater-than "></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-decrement sub">

                                                            <i class="fa-solid fa-minus "></i>
                                                        </div>
                                                        <div>

                                                            <p class="mx-2">1</p>
                                                        </div>
                                                        <div class="product-increment add">

                                                            <i class="fa-solid fa-plus "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="final-button">
                                                <button class='add-to-cart-btn-2 btn-custom w-100 py-2'>Add to Cart <span>₹
                                                        300</span></button>
                                            </div>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="product-cart">
                                                <div class="px-3 py-2">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class='product-overlay-back'>
                                                            <i class="fa-solid fa-less-than"></i>
                                                        </div>
                                                        <div>
                                                            <a href="">See Full Details</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label><input type="radio" class="me-1"> One Time Purchase</label>
                                                        <!-- <input type="radio" name="" id=""> <span id='product-overlay'>Subscribe and Save</span> -->
                                                        <label><input type="radio" class="me-1"> <span id=''>Subscribe and Save</span>
                                                        </label>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="product-decrement lesser">

                                                                <i class="fa-solid fa-less-than"></i>
                                                            </div>
                                                            <div>

                                                                <p class="mx-2">50 g</p>
                                                            </div>
                                                            <div class="product-increment greater">

                                                                <i class="fa-solid fa-greater-than"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="product-decrement sub">

                                                                <i class="fa-solid fa-minus"></i>
                                                            </div>
                                                            <div>

                                                                <p class="mx-2">1</p>
                                                            </div>
                                                            <div class="product-increment add">

                                                                <i class="fa-solid fa-plus"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="subscription-tab">
                                                        <ul class="nav nav-tabs row " id="myTab" role="tablist">
                                                            <li class="nav-item one col" role="presentation">
                                                                <button class="nav-link active w-100" id="home-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#home"
                                                                    type="button" role="tab" aria-controls="home"
                                                                    aria-selected="true">Monthly
                                                                    Subscription</button>
                                                            </li>
                                                            <li class="nav-item col" role="presentation">
                                                                <button class="nav-link w-100" id="profile-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#profile"
                                                                    type="button" role="tab" aria-controls="profile"
                                                                    aria-selected="false">Prepaid
                                                                    Subscription</button>
                                                            </li>

                                                        </ul>
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active px-3 py-2" id="home"
                                                                role="tabpanel" aria-labelledby="home-tab">
                                                                <div>
                                                                    <input type="radio" name="" id="" class="me-1">
                                                                    <span>Monthly Subscription (5% off)</span>
                                                                </div>
                                                                <div>
                                                                    <ul>
                                                                        <li>Initial purchase 5% offer (1st month)</li>
                                                                        <li>Repeating purchase 10% offer (Recurring month)
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade px-3 py-2" id="profile"
                                                                role="tabpanel" aria-labelledby="profile-tab">
                                                                <div>
                                                                    <div class='mb-1'>
                                                                        <input type="radio" name="" id="" class="me-1">
                                                                        <span>3 Months prepaid Subscription (10% off)</span>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" name="" id="" class="me-1">
                                                                        <span>6 Months prepaid Subscription (15% off)</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="final-button">
                                                    <button class='add-to-cart-btn-2 btn-custom w-100 py-2'>Add to Cart
                                                        <span>₹
                                                            300</span></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>


                    </div>


                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="curosele-container">
                <div class="container-lg product-curosele mt-5 px-3 px-lg-0 ">
                    <div class="owl-carousel owl-theme">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class="">
                                <div class="product-card">
                                    <div class="best-seller-top">
                                        <p>Best Seller</p>
                                    </div>
                                    <div class="product-img">
                                        <?= Html::img('@web/web/images/product/product-image.png', ['class' => 'w-100']) ?>
                                    </div>
                                    <div class="product-details-container bg-white">
                                        <div class="product-content">
                                            <div class="px-3">
                                                <div class="container-1 d-flex justify-content-between pt-2">
                                                    <div>
                                                        <h2>Udhayam<?= $i ?></h2>
                                                    </div>
                                                    <div><i class="fa-regular fa-heart fa-1xl wishlist-icon"></i></div>
                                                </div>
                                                <div class='mb-3 container-1-category'>
                                                    <p>Filter Coffee</p>
                                                </div>
                                                <div class="container-2 d-flex justify-content-between ">
                                                    <div class="d-flex align-items-center">
                                                        <h3 class="me-2">₹ 300</h3>
                                                        <p class="mrp ">M.R.P ₹399</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-less-than"></i>
                                                        <p class="mx-2">50 g</p>
                                                        <i class="fa-solid fa-greater-than"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-to-cart-btn">
                                                <button class='add-to-cart-btn-1 w-100 btn-custom py-2'>
                                                    Add to Cart <span>₹ 300</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="product-cart">
                                            <div class="px-3 py-3">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <div class='add-to-cart-btn-back'>
                                                        <i class="fa-solid fa-less-than"></i>
                                                    </div>
                                                    <div>
                                                        <a href="">See Full Details</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <label><input type="radio"> One Time Purchase</label>
                                                    <label><input type="radio"> Subscribe and Save</label>
                                                </div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-less-than"></i>
                                                        <p class="mx-2">50 g</p>
                                                        <i class="fa-solid fa-greater-than"></i>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-solid fa-minus"></i>
                                                        <p class="mx-2">1</p>
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="final-button">
                                                <button class='add-to-cart-btn-2 btn-custom w-100 py-2'>Add to Cart <span>₹
                                                        300</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .nav-link {
        background-color: transparent !important;
        color: #808080 !important;
        font-size: 24px;
        font-weight: 700;
        border-radius: 0 !important;
    }

    .nav-pills .active {
        color: var(--violet-dark) !important;
        border-bottom: 3px solid var(--violet-dark);
    }

    .nav-pills {
        border-bottom: 2px solid #808080 !important;
        width: 80%;
    }
@media (max-width:1000px) {
    .nav-pills {
        border-bottom: 2px solid #808080 !important;
        width: 90%;
    }
    .nav-link {
        
        
        font-size: 18px;
        font-weight: 700;
        
    }
}
    @media (max-width: 572px) {
        .nav-link {
            font-size: 16px;
        }

        .nav-pills {
            width: 100% !important;

        }
         .nav-link {
        
        
        font-size: 10px;
      
        
    }
    }

    /* button */
    .owl-carousel .owl-nav {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        width: 100%;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        z-index: 20;
        pointer-events: none;
    }

    /* BUTTON STYLE (ROUND, OUTSIDE) */
    .owl-carousel .owl-nav button {
        pointer-events: all;
        background: #808080 !important;
        /* Gray */
        color: #fff !important;
        /* border: 2px solid  !important; */
        border-radius: 50% !important;
        width: 40px;
        height: 40px;
        font-size: 22px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .owl-carousel .owl-nav button:hover {
        background: #555 !important;
        transform: scale(1.1);
    }

    /* POSITION BUTTONS OUTSIDE */
    .owl-carousel .owl-nav .owl-prev {
        position: absolute;
        left: -60px;
        /* Outside container */
    }

    .owl-carousel .owl-nav .owl-next {
        position: absolute;
        right: -60px;
        /* Outside container */
    }

    /* RESPONSIVE: Adjust button size & position */
    @media (max-width: 992px) {
        .owl-carousel .owl-nav .owl-prev {
            left: -40px;
        }

        .owl-carousel .owl-nav .owl-next {
            right: -40px;
        }

        .owl-carousel .owl-nav button {
            width: 40px;
            height: 40px;
            font-size: 18px !important;
        }
    }

    /* HIDE ARROWS BELOW 760px */
    @media (max-width: 760px) {
        .owl-carousel .owl-nav {
            display: none;
        }
    }
</style>


<script>





    $(document).ready(function () {


         $(".product-cart").hide();
         $('.product-overlay').hide();

        $(".add-to-cart-btn").on("click", function () {
            let card = $(this).closest(".product-card");
            card.find(".product-content").slideUp(300);   // smooth hide
            card.find(".product-cart").slideDown(300);    // smooth show
        });

        $('.add-to-cart-btn-back').on('click', function () {
            let card = $(this).closest(".product-card");
            card.find(".product-cart").slideUp(300);
            card.find(".product-content").slideDown(300);
        });
        $('.product-overlay-back').on('click', function () {
            let card = $(this).closest(".product-card");
            card.find(".product-overlay").slideUp(300);
            card.find(".product-cart").slideDown(300);
        });
        // 
        $('.product-overlay-top').on('click', function () {
            
            let card = $(this).closest(".product-card");
           
            card.find(".product-overlay").slideDown(300);
        });



        // owl curosele

        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,

                },
                600: {
                    items: 2,
                    nav: false

                },
                1050: {
                    items: 3,


                }
            }
        })
    });





</script>
