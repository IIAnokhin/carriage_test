<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarriageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carriages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carriage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Carriage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'number',
                'label'     => 'Номер вагона'
            ],
            [
                'attribute' => 'year',
                'label'     => 'Год постройки.'
            ],
            [
                'attribute' => 'thickness',
                'label'     => 'Толщина колеса'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
