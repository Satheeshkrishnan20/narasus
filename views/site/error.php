<?php
use yii\helpers\Html;

?>



<div class="container-lg mt-5">



    <div id="multiItemCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-12 col-lg-6 custom-shop-btn">
                        <div class="card ">
                            <?= Html::img('@web/web/images/banner/banner.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 1']) ?>
                            <div class="card-body">
                                <?= Html::a('Shop Now', ['site/shop'], ['class' => "btn "]) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-lg-block custom-shop-btn">
                        <div class="card">
                            <?= Html::img('@web/web/images/banner/banner-2.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 2']) ?>
                            <div class="card-body-1">
                                <?= Html::a('Shop Now', ['site/shop'], ['class' => "btn "]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="carousel-item ">
                <div class="row">
                    <div class="col-12 col-lg-6 custom-shop-btn">
                        <div class="card">
                            <?= Html::img('@web/web/images/banner/banner.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 1']) ?>
                            <div class="card-body">
                                <?= Html::a('Shop Now', ['site/shop'], ['class' => "btn "]) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-lg-block custom-shop-btn">
                        <div class="card">
                            <?= Html::img('@web/web/images/banner/banner-2.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 2']) ?>
                            <div class="card-body-1">
                                <?= Html::a('Shop Now', ['site/shop'], ['class' => "btn "]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Add more slides as needed -->

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#multiItemCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#multiItemCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>



<!-- curosele end -->



<div class="d-flex justify-content-center mt-5">
    <div class="w-75 text-center">

         <p class="">
            Lorem ipsum dolor sit amet consectetur. Odio varius enim in in
            ac.Scelerisque netus aliquet fermentum nunc.
        </p>
    </div>
</div>

       