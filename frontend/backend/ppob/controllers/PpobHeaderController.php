<?php

namespace frontend\backend\ppob\controllers;

use Yii;
use frontend\backend\ppob\models\PpobHeader;
use frontend\backend\ppob\models\PpobHeaderSearch;
use frontend\backend\ppob\models\PpobMasterKelompok;
use frontend\backend\ppob\models\PpobMasterKelompokSearch;
use frontend\backend\ppob\models\PpobProvider;
use frontend\backend\ppob\models\PpobProviderSearch;
use frontend\backend\ppob\models\PpobMasterKtg;
use frontend\backend\ppob\models\PpobMasterKtgSearch;
use frontend\backend\ppob\models\PpobMasterType;
use frontend\backend\ppob\models\PpobMasterTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PpobHeaderController implements the CRUD actions for PpobHeader model.
 */
class PpobHeaderController extends Controller
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
     * Lists all PpobHeader models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModelHeader = new PpobHeaderSearch();
        $dataProviderHeader = $searchModelHeader->search(Yii::$app->request->queryParams);
        $searchModelKelompok = new PpobMasterKelompokSearch();
        $dataProviderKelompok = $searchModelKelompok->search(Yii::$app->request->queryParams);
        $searchModelProvider = new PpobProviderSearch();
        $dataProviderProvider = $searchModelProvider->search(Yii::$app->request->queryParams);
        $searchModelMasterType = new PpobMasterTypeSearch();
        $dataProviderMasterType = $searchModelMasterType->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModelHeader' => $searchModelHeader,
            'dataProviderHeader' => $dataProviderHeader,
            'searchModelKelompok' => $searchModelKelompok,
            'dataProviderKelompok' => $dataProviderKelompok,
            'searchModelProvider' => $searchModelProvider,
            'dataProviderProvider' => $dataProviderProvider,
            'searchModelMasterType' => $searchModelMasterType,
            'dataProviderMasterType' => $dataProviderMasterType,
        ]);
    }

    /**
     * Displays a single PpobHeader model.
     * @param string $id
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
     * Creates a new PpobHeader model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PpobHeader();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);        
        }
    }

    /**
     * Updates an existing PpobHeader model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);        
        }
    }

    /**
     * Deletes an existing PpobHeader model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
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
     * Finds the PpobHeader model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PpobHeader the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PpobHeader::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
