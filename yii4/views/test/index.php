<?php


use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>


    <div class="col-md-12">
        <h2>Страница с формой</h2>

        <?php \app\components\HelloWidget::begin(['name' => 'John']) ?>
        <h1>Контент виджета</h1>

        <?php \app\components\HelloWidget::end() ?>
        <?php Pjax::begin() ?>
        <?= \app\widgets\Alert::widget() ?>

        <!-- <?php /*if (Yii::$app->session->hasFlash('success')): */ ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <? /*=Yii::$app->session->getFlash('success')*/ ?>
        </div>
    <?php /*endif;*/ ?>
    <?php /*if (Yii::$app->session->hasFlash('error')): */ ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <? /*=Yii::$app->session->getFlash('error')*/ ?>
        </div>
    --><?php /*endif;*/ ?>
        <?php $form = ActiveForm::begin([
            'id' => 'my-form',
            'enableClientValidation' => false,
            'options' => [
                'class' => 'form-horizontal',
                'data-pjax' => true,
            ],
            'fieldConfig' => [
                'template' => "{label} \n <div class='col-md-5'> {input} </div> \n  
                           <div class='col-md-5'> {hint} </div> \n <div class='col-md-5'> {error} </div>",
                'labelOptions' => ['class' => 'col-md-2 control-label'],
            ]
        ]) ?>

        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Введите Ваше имя']) ?>

        <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введите Ваш email']) ?>

        <?= $form->field($model, 'topic')->input('text', ['placeholder' => 'Введите тему сообщения']) ?>

        <?= $form->field($model, 'text')->textarea(['rows' => 7, 'placeholder' => 'Введите Ваше сообщение']) ?>

        <div class="form-group">
            <div class="col-md-5 col-md-offset-2">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block']) ?>
            </div>
        </div>
        <?php ActiveForm::end() ?>
        <?php Pjax::end() ?>
    </div>
<?php
/*$js = <<<JS
var form = $('#my-form');
form.on('beforeSubmit', function() {
  var data = form.serialize();
  $.ajax({
      url: form.attr('action'),
      type: 'POST',
      data: data,
      success: function (res) {
          console.log(res);
          form[0].reset();
      },
      error: function () {
        alert('Error');
      }
  });
    return false;
});
JS;
$this->registerJs($js);
*/ ?>