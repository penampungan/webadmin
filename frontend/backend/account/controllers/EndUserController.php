<?php

namespace frontend\backend\account\controllers;

use Yii;
use frontend\backend\account\models\EndUser;
use frontend\backend\account\models\EndUserSearch;
use frontend\backend\sistem\models\UserKg;
use frontend\backend\sistem\models\UserKgSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EndUserController implements the CRUD actions for EndUser model.
 */
class EndUserController extends Controller
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
     * Lists all EndUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $paramCari='';
        //PencarianIndex
		$modelPeriode = new \yii\base\DynamicModel([
			'OWNER'
		]);		
		$modelPeriode->addRule(['OWNER'], 'required')
         ->addRule(['OWNER'], 'safe');			
		if ($modelPeriode->load(Yii::$app->request->get())) {
			$hsl = \Yii::$app->request->get();	
			$paramCari=$hsl['DynamicModel']['OWNER'];
		};				
		//PUBLIC PARAMS	
		$cari=['ACCESS_GROUP'=>$paramCari];	
		        
        $searchModel = new EndUserSearch($cari);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if (!empty($paramCari)) {
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'paramCari'=>$paramCari
            ]);	
        } else {
            Yii::$app->session->setFlash('error', "Anda belum memilih Owner");
            return $this->redirect(['/account/container-store']);
        }
    }

    public function actionPencarianIndex(){
		$modelPeriode = new \yii\base\DynamicModel([
			'OWNER'
		]);		
		$modelPeriode->addRule(['OWNER'], 'required')
         ->addRule(['OWNER'], 'safe');
		$data = Yii::$app->db->createCommand("select username,ACCESS_GROUP,b.ACCESS_ID,CONCAT(NM_DEPAN,NM_BELAKANG,NM_TENGAH)as NAMA from user as a INNER JOIN user_profile as b on a.ACCESS_GROUP=b.ACCESS_ID WHERE ACCESS_LEVEL = 'OWNER' ")->queryAll();
        // print_r($data);die();
        if (!$modelPeriode->load(Yii::$app->request->post())) {
			return $this->renderAjax('form_cari',[
                'modelPeriode' => $modelPeriode,
                'data'=>$data
			]);
		}
	}
    /**
     * Displays a single EndUser model.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT),
        ]);
    }

    /**
     * Creates a new EndUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EndUser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EndUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        $model = $this->findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EndUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        $this->findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EndUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return EndUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        if (($model = EndUser::findOne(['CUSTOMER_ID' => $CUSTOMER_ID, 'YEAR_AT' => $YEAR_AT, 'MONTH_AT' => $MONTH_AT])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
