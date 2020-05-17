<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use mihaildev\ckeditor\CKEditor;


/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>

    <?= $form->field($model, 'visible')->checkbox() ?>

    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',


        'options' => [
                'class' => 'form-control'
        ]
    ]) ?>
    <br><br><br>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
