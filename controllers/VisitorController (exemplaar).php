<?php

namespace app\controllers;

use Yii;
use app\models\Visitor;
use app\models\VisitorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * VisitorController implements the CRUD actions for Visitor model.
 */
 // hier wordt nederlands gezet  nee toch niet
//Yii::$app->language = 'zh-CN';
//Yii::$app->language = 'en-US';
//Yii::$app->language = 'nl-NL';
//Yii::$app->language = 'nl_NL';
 
class VisitorController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                	[
                    'actions' => ['language'],
                    'allow' => 'true',
                    ],
                [ 
                    'actions' => ['logout', 'index','set-cookie','show-cookie'],
                    'allow' => 'true',
                    'roles' => ['@'],
                    ],
                    ],
                    ],
                
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'language' => ['POST'],
                ],
            ],
        ];
        
    }

    /**
     * Lists all Visitor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VisitorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    

    public function actionLanguage()
    {
    	if(isset($_POST['lang'])){
    		Yii::$app->language = $_POST['lang'];
    		$cookie = new yii\web\Cookie([
            'name' => 'lang',
            'value' => $_POST['lang']
         ]);
			Yii::$app->getResponse()->getCookies()->add($cookie);
    	
    	}
    }
    
     
    
    
    /**
     * Displays a single Visitor model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Visitor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Visitor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->naam]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Visitor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->naam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Visitor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Visitor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Visitor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Visitor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
