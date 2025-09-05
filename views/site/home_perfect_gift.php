<?php
use Yii\helpers\Html;

?>


<!-- Perfecr Gift -->
<div class="container-lg">
    <div class="perfect-gift mt-5">


        <div class="text-center mb-5 perfect-gift-titile">
            <h1>Perfect gift For All</h1>
        </div>


        <div class=" mt-5">
            <div class="row g-3">


                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 ">
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
                                            <i class="fa-solid fa-less-than "></i>
                                            <p class="mx-2">50 g</p>
                                            <i class="fa-solid fa-greater-than "></i>
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
                                        <label><input type="radio"> One Time Purchase</label>
                                        <label><input type="radio"><span id="product-overlay">Subscribe and Save</span> </label>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
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
                                        <label><input type="radio"> One Time Purchase</label>
                                        <!-- <input type="radio" name="" id=""> <span id='product-overlay'>Subscribe and Save</span> -->
                                        <label><input type="radio"> <span id=''>Subscribe and Save</span> </label>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
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
                                    <div class="subscription-tab">
                                        <ul class="nav nav-tabs row" id="myTab" role="tablist">
  <li class="nav-item col" role="presentation">
    <button class="nav-link active w-100" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Monthly Subscription</button>
  </li>
  <li class="nav-item col" role="presentation">
    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Prepaid Subscription</button>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active px-3 py-2" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div>
    <input type="radio" name="" id="">
    <span>Monthly Subscription (5% off)</span>
   </div>
   <div>
    <ul>
        <li>Initial purchase 5% offer (1st month)</li>
        <li>Repeating purchase 10% offer (Recurring month)</li>
    </ul>
   </div>
</div>
  <div class="tab-pane fade px-3 py-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div>
        <div class='mb-1'>
            <input type="radio" name="" id="">
            <span>3 Months prepaid Subscription (10% off)</span>
        </div>
        <div>
            <input type="radio" name="" id="">
            <span>6 Months prepaid Subscription (15% off)</span>
        </div>
    </div>
</div>
  
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
                </div>
                <!-- card 1 end -->
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 ">
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
                                            <i class="fa-solid fa-less-than"></i>
                                            <p class="mx-2">50 g</p>
                                            <i class="fa-solid fa-greater-than"></i>
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
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class='add-to-cart-btn-back'>
                                            <i class="fa-solid fa-less-than"></i>
                                        </div>
                                        <div>
                                            <a href="">See Full Details</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <label><input type="radio">  One Time Purchase</label>
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
                <!-- card 1 end -->
                <!-- Card 1 -->
                <div class=" col-12 col-md-6 col-lg-4 ">
                    <div class="product-card">
                        
                        <div class="product-img">
                            <?= Html::img('@web/web/images/banner/gift-card-banner.png', ['class' => 'w-100']) ?>
                        </div>

                        <div class="add-to-cart-btn">
                            <button class='add-to-cart-btn-1 w-100 btn-custom py-2'>Add to Cart <span>₹
                                    300</span></button>
                        </div>

                        <!-- card 1 end -->



                    </div>
                </div>

                <!-- Repeat same block for other products -->


            </div>
        </div>
        </div>
        </div>



        <style>
            
        </style>