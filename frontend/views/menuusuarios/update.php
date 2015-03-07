<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */

$this->title = 'Update Menuusuarios: ' . ' ' . $model->IDPRIO;
$this->params['breadcrumbs'][] = ['label' => 'Menuusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDPRIO, 'url' => ['view', 'id' => $model->IDPRIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menuusuarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
