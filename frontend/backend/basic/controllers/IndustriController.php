<?php

namespace frontend\backend\basic\controllers;

use Yii;
use frontend\backend\basic\models\Industri;
use frontend\backend\basic\models\IndustriSearch;
use frontend\backend\basic\models\IndustriGroup;
use frontend\backend\basic\models\IndustriGroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IndustriController implements the CRUD actions for Industri model.
 */
class IndustriController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
	public function beforeAction($action){
        $modulIndentify=4; //OUTLET
       // Check only when the user is logged in.
       // Author piter Novian [ptr.nov@gmail.com].
       if (!Yii::$app->user->isGuest){
           if (Yii::$app->session['userSessionTimeout']< time() ) {
               // timeout
               Yii::$app->user->logout();
               return $this->goHome(); 
           } else {	
               //add Session.
               Yii::$app->session->set('userSessionTimeout', time() + Yii::$app->params['sessionTimeoutSeconds']);
               //check validation [access/url].
               $checkAccess=Yii::$app->getUserOpt->UserMenuPermission($modulIndentify);
               if($checkAccess['modulMenu']['MODUL_STS']==0 OR $checkAccess['ModulPermission']['STATUS']==0){				
                   $this->redirect(array('/site/alert'));
               }else{
                   if($checkAccess['PageViewUrl']==true){						
                       return true;
                   }else{
                       $this->redirect(array('/site/alert'));
                   }					
               }			 
           }
       }else{
           Yii::$app->user->logout();
           return $this->goHome(); 
       }
   }
    /**
     * Lists all Industri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModelGroup = new IndustriGroupSearch();
        $dataProviderGroup  = $searchModelGroup->search(Yii::$app->request->queryParams);

        $paramCari=Yii::$app->getRequest()->getQueryParam('industri');
        // print_r($paramCari);die();
        if ($paramCari==''){
            $modelGrp =IndustriGroup::find()->orderBy(['INDUSTRY_GRP_ID'=>SORT_ASC])->one();
            $searchModel = new IndustriSearch(['INDUSTRY_GRP_ID'=>$modelGrp->INDUSTRY_GRP_ID]);
        }else{
            $searchModel = new IndustriSearch(['INDUSTRY_GRP_ID'=>$paramCari]);
        }
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        

        return $this->render('index', [
            'searchModel' => $searchModel!=''?$searchModel:false,
            'dataProvider' => $dataProvider,
            'searchModelGroup' => $searchModelGroup,
            'dataProviderGroup' => $dataProviderGroup,
        
        ]);
    }

    /**
     * Displays a single Industri model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Industri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Industri();

        if ($model->load(Yii::$app->request->post())) {
            $model->CREATE_AT=date('Y-m-d H:i:s');
            if($model->save()){
                return $this->redirect(['index']);
            }
        }else{
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Industri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Industri model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $model->STATUS ="3";
        $model->update();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Industri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Industri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Industri::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
