<?php
/* @var $products array */
/* @var $category \app\models\Category */
/* @var $product \app\models\Product */
?>

<h4><?= $category->title ?></h4>
<?php foreach ($products as $product): ?>
    <p> <?= $product->title ?> <?= $product->price ?></p>
<?php endforeach; ?>