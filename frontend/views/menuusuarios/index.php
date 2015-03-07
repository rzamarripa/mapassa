<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MENUUSUARIOSSEARCH */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menuusuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menuusuarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menuusuarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDPADRE',
            'IDLLAVE',
            'DESCRI',
            'TIPO',
            'COD_USU',
            // 'IDPRIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
