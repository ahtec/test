<?php

use yii\helpers\Html;
// ***********  start gerard doets *****************
use yii\web\Session;
$session = new Session();
if ($session->has('lang')) {
 	Yii::$app->language =  $session ->get('lang');
 }
 
 // *************************************************
/* @var $this yii\web\View */
/* @var $model app\models\Visitor */

$this->title = Yii::t('app', 'Create Visitor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Visitors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitor-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
