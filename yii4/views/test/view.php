<div class="col-md-12">
    <h2>Работа с моделями</h2>
    <?php /*debug($model->getAttributes()) */?>
<!--    <?php /*$form = \yii\widgets\ActiveForm::begin() */?>
    <?/*=$form->field($model,'code')*/?>
    <?/*=$form->field($model,'name')*/?>
    <?/*=$form->field($model,'population')*/?>
    <?/*=$form->field($model,'status')*/?>
    --><?php /*\yii\widgets\ActiveForm::end() */?>

   <!-- --><?php /*debug($countries)*/?>
<table class="table">
    <?php foreach ($countries as $country): ?>
    <tr>
    <td><?= $country['code'] ?></td>
    <td><?= $country['name'] ?></td>
    <td><?= $country['population'] ?></td>
    </tr>
    <?php endforeach;?>
</table>
</div>
