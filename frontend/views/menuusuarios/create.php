<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */

$this->title = 'Create Menuusuarios';
$this->params['breadcrumbs'][] = ['label' => 'Menuusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menuusuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
