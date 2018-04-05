<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bezoek */
/* @var $form ActiveForm */
?>
<div class="formulier">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'naam') ?>
        <?= $form->field($model, 'adres') ?>
        <?= $form->field($model, 'plaats') ?>
        <?= $form->field($model, 'klacht') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- formulier -->
