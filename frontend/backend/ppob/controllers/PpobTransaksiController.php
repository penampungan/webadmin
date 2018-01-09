<?php

namespace frontend\backend\ppob\controllers;

use Yii;
use frontend\backend\ppob\models\PpobTransaksi;
use frontend\backend\ppob\models\PpobTransaksiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use ptrnov\postman4excel\Postman4ExcelBehavior;

/**
 * PpobTransaksiController implements the CRUD actions for PpobTransaksi model.
 */
class PpobTransaksiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'export4excel' => [
				'class' => Postman4ExcelBehavior::className(),
				//'downloadPath'=>Yii::getAlias('@lukisongroup').'/cronjob/',
				//'downloadPath'=>'/var/www/backup/ExternalData/',
				'widgetType'=>'download',
			], 
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
     * Lists all PpobTransaksi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PpobTransaksiSearch();
        $dataProviderAll = $searchModel->searchAll(Yii::$app->request->queryParams);
        $dataProviderFirst = $searchModel->searchFirst(Yii::$app->request->queryParams);
        $dataProviderPending = $searchModel->searchPending(Yii::$app->request->queryParams);
        $dataProviderSuccess = $searchModel->searchSuccess(Yii::$app->request->queryParams);
        $dataProviderGagal = $searchModel->searchGagal(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProviderAll' => $dataProviderAll,
            'dataProviderFirst' => $dataProviderFirst,
            'dataProviderPending' => $dataProviderPending,
            'dataProviderSuccess' => $dataProviderSuccess,
            'dataProviderGagal' => $dataProviderGagal,
        ]);
    }

    /**
     * Displays a single PpobTransaksi model.
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
     * Creates a new PpobTransaksi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PpobTransaksi();

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
     * Updates an existing PpobTransaksi model.
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
     * Deletes an existing PpobTransaksi model.
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

  
    public function actionUploadFile(){
		$model = new \yii\base\DynamicModel([
			'uploadExport'
		]);		
		$model->addRule(['uploadExport'], 'required')
         ->addRule(['uploadExport'], 'safe');
		 
		if (!$model->load(Yii::$app->request->post())) {
			return $this->renderAjax('form_upload',[
				'model' => $model
			]);
		}
	}
	
    /**
     * Finds the PpobTransaksi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PpobTransaksi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PpobTransaksi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionExportFile(){
        // $aryPaid=[
		// 	['TERMINAL_ID'=>'01234567890','FINGER_ID'=>'321','KARYAWAN'=>'Piter','TGL_IN'=>'2017-09-05','TGL_OUT'=>'2017-09-05','JAM_IN'=>'08:00:00','JAM_OUT'=>'17:00:00'],
		// 	['TERMINAL_ID'=>'112312312312','FINGER_ID'=>'321','KARYAWAN'=>'Piter','TGL_IN'=>'2017-09-05','TGL_OUT'=>'2017-09-06','JAM_IN'=>'08:00:00','JAM_OUT'=>'02:00:00'],
		// ];
		// $modelPrd=AbsenImportPeriode::find()->where(['TIPE'=>'1','AKTIF'=>'1'])->one();
		// $closingParam=['tglStart'=>$modelPrd->TGL_START,'tglEnd'=>$modelPrd->TGL_END];
		// $searchModelDetail = new AbsenPayrollPaidSearch();
		// $dataProviderDetail=$searchModelDetail->searchExcelExportPaid(Yii::$app->request->queryParams);
        // $aryPaid=$dataProviderDetail->getModels();	
    
		$searchModel = new PpobTransaksiSearch();
		$dataProvider=$searchModel->searchExcelExport(Yii::$app->request->queryParams);
		$aryPaid=$dataProvider->allModels;	
		//  print_r($aryPaid);die();
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid);
        $excel_titlePaid = $excel_dataPaid['excel_title'];
        $excel_ceilsPaid = $excel_dataPaid['excel_ceils'];
		$excel_content = [
			 [
				'sheet_name' => 'Payroll-Paid-Data',
                'sheet_title' => [
					['TRANS_ID','TRANS_DATE','TGL','JAM','ACCESS_GROUP','STORE_ID','ID_PRODUK']
				],
			    'ceils' => $excel_ceilsPaid,
                'freezePane' => 'A2',
                'columnGroup'=>false,
                'autoSize'=>false,
                'headerColor' => Postman4ExcelBehavior::getCssClass("header"),
                'headerStyle'=>[					
					[
						'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
						'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
						'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
						'JAM' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
						'ACCESS_GROUP' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
						'STORE_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
						'ID_PRODUK' =>['font-size'=>'8','width'=>'10','valign'=>'center','align'=>'center']
					]						
				],
				'contentStyle'=>[
					[						
						'TRANS_ID' =>['font-size'=>'8','valign'=>'center','align'=>'left'],
						'TRANS_DATE' =>['font-size'=>'8','valign'=>'center','align'=>'left'],
						'TGL' => ['font-size'=>'8','valign'=>'center','align'=>'left'],
						'JAM' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
						'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
						'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
						'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
					]
				],
               'oddCssClass' => Postman4ExcelBehavior::getCssClass("odd"),
               'evenCssClass' => Postman4ExcelBehavior::getCssClass("even"),
			]
		];
		$excel_file = "Payroll-Paid-Data";
		$this->export4excel($excel_content, $excel_file,0);
    }
}
