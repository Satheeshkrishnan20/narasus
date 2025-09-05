<?php
use yii\helpers\Html;

?>



<div class="container-md mt-5">



    <div id="multiItemCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-12 col-md-6 custom-shop-btn">
                        <div class="card ">
                            <?= Html::img('@web/web/images/banner/banner.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 1']) ?>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block custom-shop-btn">
                        <div class="card">
                            <?= Html::img('@web/web/images/banner/banner-2.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 2']) ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="carousel-item ">
                <div class="row">
                    <div class="col-12 col-md-6 custom-shop-btn">
                        <div class="card">
                            <?= Html::img('@web/web/images/banner/banner.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 1']) ?>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block custom-shop-btn">
                        <div class="card">
                            <?= Html::img('@web/web/images/banner/banner-2.png', ['class' => 'img-fluid w-100 banner-img', 'alt' => 'Banner 2']) ?>
                            
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


<style>
    /* Make carousel controls positioned outside */
#multiItemCarousel {
  position: relative;
}

#multiItemCarousel .carousel-control-prev,
#multiItemCarousel .carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
}

#multiItemCarousel .carousel-control-prev {
  left: -50px; /* move outside the container */
}

#multiItemCarousel .carousel-control-next {
  right: -50px; /* move outside the container */
}

/* Responsive adjustment */
@media (max-width: 768px) {
    #multiItemCarousel {
  position: static;
}
  #multiItemCarousel .carousel-control-prev {
    display:none;
  }
  #multiItemCarousel .carousel-control-next {
    display:none;
  }
}

</style>


