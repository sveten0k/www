<?php

/* @var $articles array */
/* @var $article \app\models\Articles */

?>
<ul>
<?php foreach ($articles as $article): ?>

    <li><?=\yii\helpers\Html::a($article->title, ['/site/page', 'id' => $article->id])?></li>


<?php endforeach; ?>
</ul>