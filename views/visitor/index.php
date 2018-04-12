<?php

use yii\helpers\Html;
use yii\grid\GridView;

// ************ gerard doets ***********
use yii\web\Session;
$session = new Session();
//***************************************

$this->title = Yii::t('app', 'Visitors');
$this->params['breadcrumbs'][] = $this->title;

// Hier wordt de taal gezet als deze in de url gezet wordt, anders wordt de default gebruikt
//    \Yii::$app->language =  'nl_NL';

$TAAL = \Yii::$app->language;   // declareren variabele $TAAL

if ($session->has('lang'))   // staat er een sessie variabele?
	{
	 	Yii::$app->language =  $session ->get('lang');
		$TAAL = \Yii::$app->language;
	} 
	 
if (isset($_REQUEST['TAAL']))    // is de taal gewijzigd in de links?
	{
	 \Yii::$app->language =  $_REQUEST['TAAL'];
	 $TAAL = $_REQUEST['TAAL'];
	} else {
	 $TAAL = \Yii::$app->language;
	}

$session->set('lang',$TAAL);  // schrijf gekozen taal naar session

//******************************************************

?>
<div class="visitor-index">
<?php 
echo 'taal = ';  
echo \Yii::$app->language ;   // even voor de zekerheid
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Visitor'), ['create'], ['class' => 'btn btn-success']) ?>
        
<!--- ************** begin gerard doets ***********   --->
        <?= Html::tag('div',Yii::t('app', 'Language') .
		     ' '. Yii::t('app', 'is now') .
		     '<strong> '. Yii::t('app', $TAAL). 
		     '</strong> '. Yii::t('app','click to change language' ) ) ?>
        
        
		<?= Html::a('Nederlands',['','TAAL'=> 'nl_NL']) .' '?>
		<?= Html::a('Deutsch ',['','TAAL'=> 'de']) .' ' ?>
		<?= Html::a('English',['','TAAL'=> 'en']) .' ' ?>   
<!--- *************  einde wijziging *** ***********  --->
     
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
