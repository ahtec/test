<?php

use yii\helpers\Html;

// ***********  start gerard doets *****************
use yii\web\Session;
$session = new Session();
if ($session->has('lang')) {
 	Yii::$app->language =  $session ->get('lang');
 }
 
 // *************************************************

$this->title = Yii::t('app', 'Update Visitor: {nameAttribute}', [
    'nameAttribute' => $model->naam
]);
//   door gerard doets
$this->title = Yii::t('app', 'Update Visitor: ');
$this->title .=  $model->naam;


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Visitors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->naam, 'url' => ['view', 'id' => $model->naam]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="visitor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
