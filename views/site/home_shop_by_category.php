<?php
use yii\helpers\html;
?>


<div class="text-center mt-5">

    <h1 class="shop-by-category-title">Shop by category</h1>
</div>


<div class="shop-by-category container-lg mt-5">
    <div class="row gap-3 justify-content-center">
        <?php foreach ($categories as $category): ?>
            <a href="" class="text-decoration-none  col-11 col-md-5 col-lg-5">
                <div class="category-card d-flex justify-content-between">
                    <div class="category-card-name">
                        <h1><?= Html::encode($category['title']) ?><br>Product</h1>
                    </div>
                    <div class="category-card-img">
                        <?= Html::img('@web/web/images/category/' . $category['image'], ['class' => 'w-100 h-100']) ?>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>