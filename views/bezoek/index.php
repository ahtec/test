<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BezoekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bezoeks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bezoek-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bezoek', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'naam',
            'adres',
            'plaats',
            'klacht',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
