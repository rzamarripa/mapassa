<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menuusuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPADRE')->textInput() ?>

    <?= $form->field($model, 'IDLLAVE')->textInput() ?>

    <?= $form->field($model, 'DESCRI')->textInput() ?>

    <?= $form->field($model, 'TIPO')->textInput() ?>

    <?= $form->field($model, 'COD_USU')->textInput() ?>

    <?= $form->field($model, 'IDPRIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
