<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;

// use yii\bootstrap5\Html;
use yii\helpers\Html;

AppAsset::register($this);

$this->title = 'Home';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php
    $this->registerMetaTag([
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1.0',
    ]);
    ?>

</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <div class="container-lg ">        
            <div>
                <?= Html::a('error', ['site/about']) ?>
                <?= Html::a('error', ['site/error']) ?>
            </div>
        </div>
    </header>
    
    <div class="content">
        <?= $content ?>
    </div>
    <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>