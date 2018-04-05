<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VisitorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
// hier wordt nederlands gezet
Yii::$app->language = 'NL';

$this->title = Yii::t('app', 'Visitors');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Visitor'), ['create'], ['class' => 'btn btn-success']) ?>
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
