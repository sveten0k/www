<?php

/* @var $categories array */
/* @var $category \app\models\Category */
/* @var $product \app\models\Product */

?>

<?php foreach ($categories as $category): ?>
    <h4><?= $category->title ?></h4>
    <?php foreach ($category->products as $product): ?>
        <p> <?= $product->title ?> <?= $product->price ?></p>
    <?php endforeach; ?>
    <hr>
<?php endforeach; ?>
