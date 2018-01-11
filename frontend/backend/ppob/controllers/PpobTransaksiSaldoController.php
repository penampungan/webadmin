<?php

namespace frontend\backend\ppob\controllers;

use Yii;
use frontend\backend\ppob\models\PpobTransaksiSaldo;
use frontend\backend\ppob\models\PpobTransaksiSaldoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PpobTransaksiSaldoController implements the CRUD actions for PpobTransaksiSaldo model.
 */
class PpobTransaksiSaldoController extends Controller
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
     * Lists all PpobTransaksiSaldo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $paramCari=Yii::$app->getRequest()->getQueryParam('transid');
        
        $searchModel = new PpobTransaksiSaldoSearch();
        $dataProvider = $searchModel->searchTrans(Yii::$app->request->queryParams);
        $dataProviderPaid = $searchModel->searchPaid(Yii::$app->request->queryParams);
        $dataProviderMutasi = $searchModel->searchMutasi(Yii::$app->request->queryParams);
        $dataProviderExpired = $searchModel->searchExpired(Yii::$app->request->queryParams);
        $dataProviderAmbil = $searchModel->searchAmbil(Yii::$app->request->queryParams);
        $dataProviderHistory = $searchModel->search(Yii::$app->request->queryParams);
        if (empty($paramCari)) {
            //$dataProviderDetail = PpobTransaksiSaldo::find()->where(['STATUS'=>'0'])->orderBy(['TRANS_ID'=>SORT_ASC])->one();
            $dataProviderDetail = PpobTransaksiSaldo::find()->where(['TRANS_ID'=>'171123091625.0001.180105232829'])->one();
        } else { 
            $dataProviderDetail = PpobTransaksiSaldo::find()->where(['TRANS_ID'=>$paramCari])->one();
        }
        
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProviderPaid' => $dataProviderPaid,
            'dataProviderMutasi' => $dataProviderMutasi,
            'dataProviderExpired' => $dataProviderExpired,
            'dataProviderAmbil' => $dataProviderAmbil,
            'dataProvider' => $dataProvider,
            'dataProviderHistory' => $dataProviderHistory,
            'dataProviderDetail' => $dataProviderDetail,
        ]);
    }

    /**
     * Displays a single PpobTransaksiSaldo model.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID, $STORE_ID, $TRANS_DATE)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($ID, $STORE_ID, $TRANS_DATE),
        ]);
    }

    /**
     * Creates a new PpobTransaksiSaldo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PpobTransaksiSaldo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE]);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PpobTransaksiSaldo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID, $STORE_ID, $TRANS_DATE)
    {
        $model = $this->findModel($ID, $STORE_ID, $TRANS_DATE);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE]);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }
    /**
     * Deposit an existing PpobTransaksiSaldo model.
     * If Deposit is successful, the browser will be redirected to the 'view' page.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeposit($ID, $STORE_ID, $TRANS_DATE)
    {
        $model = $this->findModel($ID, $STORE_ID, $TRANS_DATE);
        $model->STATUS = 1;        
        $model->STATUS_NM = "Paid";        
        $model->update();
        return $this->redirect(['index']);
    }
    /**
     * Ambil an existing PpobTransaksiSaldo model.
     * If Ambil is successful, the browser will be redirected to the 'view' page.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionAmbil($ID, $STORE_ID, $TRANS_DATE)
    {
        $model = $this->findModel($ID, $STORE_ID, $TRANS_DATE);
        $model->STATUS = 4;        
        $model->STATUS_NM = "Pengembalian Saldo";        
        $model->update();
        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing PpobTransaksiSaldo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID, $STORE_ID, $TRANS_DATE)
    {
        $this->findModel($ID, $STORE_ID, $TRANS_DATE)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PpobTransaksiSaldo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return PpobTransaksiSaldo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $STORE_ID, $TRANS_DATE)
    {
        if (($model = PpobTransaksiSaldo::findOne(['ID' => $ID, 'STORE_ID' => $STORE_ID, 'TRANS_DATE' => $TRANS_DATE])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
