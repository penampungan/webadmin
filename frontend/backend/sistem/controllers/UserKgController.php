<?php

namespace frontend\backend\sistem\controllers;

use Yii;
use frontend\backend\sistem\models\UserKg;
use frontend\backend\sistem\models\UserKgSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserKgController implements the CRUD actions for UserKg model.
 */
class UserKgController extends Controller
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
     * Lists all UserKg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserKgSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserKg model.
     * @param string $id
     * @param string $ACCESS_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT),
        ]);
    }

    /**
     * Creates a new UserKg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserKg();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'ACCESS_ID' => $model->ACCESS_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserKg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $ACCESS_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT)
    {
        $model = $this->findModel($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'ACCESS_ID' => $model->ACCESS_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserKg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $ACCESS_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT)
    {
        $this->findModel($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT);
        $model->STATUS ="3";
        $model->update();
        return $this->redirect(['index']);
    }

    /**
     * Finds the UserKg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $ACCESS_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return UserKg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $ACCESS_ID, $YEAR_AT, $MONTH_AT)
    {
        if (($model = UserKg::findOne(['id' => $id, 'ACCESS_ID' => $ACCESS_ID, 'YEAR_AT' => $YEAR_AT, 'MONTH_AT' => $MONTH_AT])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
