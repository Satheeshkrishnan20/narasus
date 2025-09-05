<div class="category-section ">
    <div class="container-lg">


        <div class="py-3 justify-content-center row  gap-2">
            <?php foreach ($categories as $category): ?>
                <?= Html::a(
                    Html::encode($category['title']),
                    ['site/category', 'id' => $category['id']], // <-- URL with ID
                    ['class' => 'btns col-4 col-md-2 py-2 ']
                ) ?>
            <?php endforeach; ?>
        </div>



    </div>
</div>