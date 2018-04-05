<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bezoek */

$this->title = 'Create Bezoek';
$this->params['breadcrumbs'][] = ['label' => 'Bezoeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bezoek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
