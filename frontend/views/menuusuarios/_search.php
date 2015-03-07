<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MENUUSUARIOSSEARCH */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menuusuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDPADRE') ?>

    <?= $form->field($model, 'IDLLAVE') ?>

    <?= $form->field($model, 'DESCRI') ?>

    <?= $form->field($model, 'TIPO') ?>

    <?= $form->field($model, 'COD_USU') ?>

    <?php // echo $form->field($model, 'IDPRIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
