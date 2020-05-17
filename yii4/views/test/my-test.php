<?php $this->title = 'Моя тестовая страница'; ?>

<?php
$this->registerMetaTag(['name' => 'description', 'content' => 'мета-описание...'],'description');
?>

<p><code><?= __FILE__ ?></code></p>


<?php //$this->registerJsFile('@web/js/scripts.js', ['depends'=>'yii\web\YiiAsset']);?>

<?php

$js = <<<JS
alert('Hello');
JS;

$this->registerJs($js,yii\web\View::POS_LOAD);
?>
