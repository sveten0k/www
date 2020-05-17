<?php
/* @var $products array */
/* @var $category \app\models\Category */
/* @var $product \app\models\Product */
?>

<?php foreach ($products as $product): ?>
    <p> <?= $product->title ?> <?= $product->price ?>
        Category: <?= $product->category->title ?> </p>

<?php endforeach; ?>
