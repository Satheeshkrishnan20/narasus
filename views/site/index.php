<?php
use yii\helpers\Html;
?>

<!-- Category comes here -->

<!-- Home Banner -->
<?php
      echo $this->render('home_curosel_banner.php');
?>
<?php
      echo $this->render('home_best_seller.php');
?>



<div class="container-lg">
    <div class="subscription-banner mt-5 position-relative">
        <?= Html::img('@web/web/images/banner/subscription.png', ['class' => 'w-100']) ?>
        <div class="d-flex flex-wrap banner-buttons position-absolute">
            <?= Html::a('Try Subscription', '', ['class' => 'btns  me-3']) ?>
            <?= Html::a('Learn More', '', ['class' => 'btns learn-more']) ?>
        </div>
    </div>
</div>


<?php
    //   echo $this->render('home_shop_by_category.php',[
    //     'categories'=>$categories
    //   ]);
?>






<div class="container-lg">
    <div class="first-order-banner row mt-5">
        <div class='col'>
            <?= Html::img('@web/web/images/banner/subscription-2.png', ['class' => 'w-100']) ?>
        </div>
    </div>
</div>

<?php
    echo $this->render('home_perfect_gift.php');
?>
<?php
    echo $this->render('home_review.php');
?>




<!-- Slider end -->
<div class="container-lg">
    <div class="bottom-banner mt-5 row gap-3 justify-content-center w-100">

        <div class="app-download-banner mb-2 col-12 col-md-5">
            <div>
                <?= Html::img('@web/web/images/banner/app-banner.png', ['class' => 'w-100']) ?>
            </div>
            <div class='app-download-banner-btn '>
                <a href="" class="btn btn-dark mb-2">
                    <?= Html::img('@web/web/images/banner/googleplay.png', ['class' => 'w-100']) ?>
                </a> <br>
                <a href="" class="btn btn-dark">
                    <?= Html::img('@web/web/images/banner/apple.png', ['class' => 'w-100']) ?>
                </a>
            </div>
        </div>

        <div class="bottom-gift-card col-12 col-md-5 ">
            <div>
                <?= Html::img('@web/web/images/banner/bottom-gift-banner.png', ['class' => 'w-100']) ?>
            </div>
        </div>

    </div>
</div>



<!-- valuable partner -->
<div class="partner text-center my-5">
    <h1>Valuable Partner</h1>
</div>

<div class="valuable-partner-container">

    <div class="container-lg">
        <div class="d-flex flex-nowrap justify-content-evenly align-items-center">
            <div class="p-2">
                <?= Html::img('@web/web/images/partner/partner1.png', ['class' => 'img-fluid']) ?>
            </div>
            <div class="p-2">
                <?= Html::img('@web/web/images/partner/partner2.png', ['class' => 'img-fluid']) ?>
            </div>
            <div class="p-2">
                <?= Html::img('@web/web/images/partner/partner3.png', ['class' => 'img-fluid']) ?>
            </div>
            <div class="p-2">
                <?= Html::img('@web/web/images/partner/partner4.png', ['class' => 'img-fluid']) ?>
            </div>
            <div class="p-2">
                <?= Html::img('@web/web/images/partner/partner5.png', ['class' => 'img-fluid']) ?>
            </div>
        </div>
    </div>

</div>


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
        $('#product-overlay').on('click', function () {
            
            let card = $(this).closest(".product-card");
            // card.find(".product-cart").slideUp(300);
            card.find(".product-overlay").slideDown(300);
        });

        

   });


   

</script>

