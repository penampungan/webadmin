<?php

namespace frontend\backend\ppob\controllers;

use Yii;
use frontend\backend\ppob\models\PpobTransaksi;
use frontend\backend\ppob\models\PpobTransaksiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use ptrnov\postman4excel\Postman4ExcelBehavior;
use yii\helpers\Json;

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
        
        $paramCari=Yii::$app->getRequest()->getQueryParam('id');
		if ($paramCari!=''){
            $date = explode(" - ", $paramCari);
			$cari=['tgllama'=>$date[0],'tglbaru'=>$date[1]];			
		}else{
            $cek = date('Y-m-d',strtotime('-2 month',strtotime(date('Y-m-d')))).' - '.date('Y-m-d');
            $date = explode(" - ", $cek);
			$cari=['tgllama'=>$date[0],'tglbaru'=>$date[1]];			
        };
        // print_r($cari);die();
        $searchModel = new PpobTransaksiSearch($cari);
        $dataProviderAll = $searchModel->searchDataSeluruh(Yii::$app->request->queryParams);
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

  
    public function actionPencarianIndex(){
		$modelPeriode = new \yii\base\DynamicModel([
			'TGL','ACCESS_GROUP','STORE_ID'
		]);		
		$modelPeriode->addRule(['TGL','ACCESS_GROUP','STORE_ID'], 'required')
         ->addRule(['TGL','ACCESS_GROUP','STORE_ID'], 'safe');
		 
		if (!$modelPeriode->load(Yii::$app->request->post())) {
			return $this->renderAjax('form_cari',[
				'modelPeriode' => $modelPeriode
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
        $paramCari=Yii::$app->getRequest()->getQueryParam('id');
		if ($paramCari!=''){
            $date = explode(" - ", $paramCari);
			$cari=['tgllama'=>$date[0],'tglbaru'=>$date[1]];			
		}else{
            $cek = date('Y-m-d',strtotime('-2 month',strtotime(date('Y-m-d')))).' - '.date('Y-m-d');
            $date = explode(" - ", $cek);
			$cari=['tgllama'=>$date[0],'tglbaru'=>$date[1]];			
        };
		$searchModel = new PpobTransaksiSearch($cari);
		$dataProvider=$searchModel->searchExcelExport(Yii::$app->request->queryParams);
		$dataProviderBaru=$searchModel->searchExcelExportBaru(Yii::$app->request->queryParams);
		$dataProviderPending=$searchModel->searchExcelExportPending(Yii::$app->request->queryParams);
		$dataProviderSuccess=$searchModel->searchExcelExportSuccess(Yii::$app->request->queryParams);
		$dataProviderGagal=$searchModel->searchExcelExportGagal(Yii::$app->request->queryParams);
    
        $aryPaid=$dataProvider->allModels;	
		$aryPaid2=$dataProviderBaru->allModels;	
		$aryPaid3=$dataProviderPending->allModels;	
		$aryPaid4=$dataProviderSuccess->allModels;	
		$aryPaid5=$dataProviderGagal->allModels;	
        //  print_r($aryPaid);die();
        if (!empty($aryPaid)) {
            
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid);
        $excel_titlePaid = $excel_dataPaid['excel_title'];
        $excel_ceilsPaid = $excel_dataPaid['excel_ceils'];
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid2);
        $excel_ceilsPaid2 = $excel_dataPaid['excel_ceils'];
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid3);
        $excel_ceilsPaid3 = $excel_dataPaid['excel_ceils'];
		// $excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid4);
        // $excel_ceilsPaid4 = $excel_dataPaid['excel_ceils'];
		// $excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid5);
        // $excel_ceilsPaid5 = $excel_dataPaid['excel_ceils'];
		$excel_content = [
			 [
				'sheet_name' =>'Seluruh Transaksi Penjualan',
                'sheet_title' => [
					['ID','TRANS_ID','TRANS_DATE','TGL','JAM','ACCESS_GROUP','STORE_ID','ID_PRODUK','TYPE_NM','KELOMPOK','KTG_ID','KTG_NM','ID_CODE','CODE','NAME','DENOM','HARGA_DASAR','MARGIN_FEE_KG','MARGIN_FEE_MEMBER','HARGA_JUAL','PERMIT','FUNGSI','MSISDN','ID_PELANGGAN','PEMBAYARAN','RESPON_REFF_ID','RESPON_NAMA_PELANGGAN','RESPON_ADMIN_BANK','RESPON_TAGIHAN','RESPON_TOTAL_BAYAR','RESPON_MESSAGE','RESPON_STRUK','RESPON_TOKEN','STATUS']
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
            ],
			 [
				'sheet_name' =>'Transaksi Penjualan Baru',
                'sheet_title' => [
					['ID','TRANS_ID','TRANS_DATE','TGL','JAM','ACCESS_GROUP','STORE_ID','ID_PRODUK','TYPE_NM','KELOMPOK','KTG_ID','KTG_NM','ID_CODE','CODE','NAME','DENOM','HARGA_DASAR','MARGIN_FEE_KG','MARGIN_FEE_MEMBER','HARGA_JUAL','PERMIT','FUNGSI','MSISDN','ID_PELANGGAN','PEMBAYARAN','RESPON_REFF_ID','RESPON_NAMA_PELANGGAN','RESPON_ADMIN_BANK','RESPON_TAGIHAN','RESPON_TOTAL_BAYAR','RESPON_MESSAGE','RESPON_STRUK','RESPON_TOKEN','STATUS']
				],
			    'ceils' => $excel_ceilsPaid2,
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
            ],
			 [
				'sheet_name' =>'Transaksi Penjualan Pending',
                'sheet_title' => [
					['ID','TRANS_ID','TRANS_DATE','TGL','JAM','ACCESS_GROUP','STORE_ID','ID_PRODUK','TYPE_NM','KELOMPOK','KTG_ID','KTG_NM','ID_CODE','CODE','NAME','DENOM','HARGA_DASAR','MARGIN_FEE_KG','MARGIN_FEE_MEMBER','HARGA_JUAL','PERMIT','FUNGSI','MSISDN','ID_PELANGGAN','PEMBAYARAN','RESPON_REFF_ID','RESPON_NAMA_PELANGGAN','RESPON_ADMIN_BANK','RESPON_TAGIHAN','RESPON_TOTAL_BAYAR','RESPON_MESSAGE','RESPON_STRUK','RESPON_TOKEN','STATUS']
				],
			    'ceils' => $excel_ceilsPaid3,
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
            ],
			//  [
			// 	'sheet_name' =>'Transaksi Penjualan Success',
            //     'sheet_title' => [
			// 		['ID','TRANS_ID','TRANS_DATE','TGL','JAM','ACCESS_GROUP','STORE_ID','ID_PRODUK','TYPE_NM','KELOMPOK','KTG_ID','KTG_NM','ID_CODE','CODE','NAME','DENOM','HARGA_DASAR','MARGIN_FEE_KG','MARGIN_FEE_MEMBER','HARGA_JUAL','PERMIT','FUNGSI','MSISDN','ID_PELANGGAN','PEMBAYARAN','RESPON_REFF_ID','RESPON_NAMA_PELANGGAN','RESPON_ADMIN_BANK','RESPON_TAGIHAN','RESPON_TOTAL_BAYAR','RESPON_MESSAGE','RESPON_STRUK','RESPON_TOKEN','STATUS']
			// 	],
			//     'ceils' => $excel_ceilsPaid4,
            //     'freezePane' => 'A2',
            //     'columnGroup'=>false,
            //     'autoSize'=>false,
            //     'headerColor' => Postman4ExcelBehavior::getCssClass("header"),
            //     'headerStyle'=>[					
			// 		[
			// 			'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
			// 			'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
			// 			'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
			// 			'JAM' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
			// 			'ACCESS_GROUP' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
			// 			'STORE_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
			// 			'ID_PRODUK' =>['font-size'=>'8','width'=>'10','valign'=>'center','align'=>'center']
			// 		]						
			// 	],
			// 	'contentStyle'=>[
			// 		[						
			// 			'TRANS_ID' =>['font-size'=>'8','valign'=>'center','align'=>'left'],
			// 			'TRANS_DATE' =>['font-size'=>'8','valign'=>'center','align'=>'left'],
			// 			'TGL' => ['font-size'=>'8','valign'=>'center','align'=>'left'],
			// 			'JAM' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
			// 			'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
			// 			'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
			// 			'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
			// 		]
			// 	],
            //    'oddCssClass' => Postman4ExcelBehavior::getCssClass("odd"),
            //    'evenCssClass' => Postman4ExcelBehavior::getCssClass("even"),
            // ],
			//  [
			// 	'sheet_name' =>'Transaksi Penjualan Gagal',
            //     'sheet_title' => [
			// 		['ID','TRANS_ID','TRANS_DATE','TGL','JAM','ACCESS_GROUP','STORE_ID','ID_PRODUK','TYPE_NM','KELOMPOK','KTG_ID','KTG_NM','ID_CODE','CODE','NAME','DENOM','HARGA_DASAR','MARGIN_FEE_KG','MARGIN_FEE_MEMBER','HARGA_JUAL','PERMIT','FUNGSI','MSISDN','ID_PELANGGAN','PEMBAYARAN','RESPON_REFF_ID','RESPON_NAMA_PELANGGAN','RESPON_ADMIN_BANK','RESPON_TAGIHAN','RESPON_TOTAL_BAYAR','RESPON_MESSAGE','RESPON_STRUK','RESPON_TOKEN','STATUS']
			// 	],
			//     'ceils' => $excel_ceilsPaid5,
            //     'freezePane' => 'A2',
            //     'columnGroup'=>false,
            //     'autoSize'=>false,
            //     'headerColor' => Postman4ExcelBehavior::getCssClass("header"),
            //     'headerStyle'=>[					
			// 		[
			// 			'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
			// 			'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
			// 			'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
			// 			'JAM' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
			// 			'ACCESS_GROUP' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
			// 			'STORE_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
			// 			'ID_PRODUK' =>['font-size'=>'8','width'=>'10','valign'=>'center','align'=>'center']
			// 		]						
			// 	],
			// 	'contentStyle'=>[
			// 		[						
			// 			'TRANS_ID' =>['font-size'=>'8','valign'=>'center','align'=>'left'],
			// 			'TRANS_DATE' =>['font-size'=>'8','valign'=>'center','align'=>'left'],
			// 			'TGL' => ['font-size'=>'8','valign'=>'center','align'=>'left'],
			// 			'JAM' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
			// 			'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
			// 			'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
			// 			'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
			// 		]
			// 	],
            //    'oddCssClass' => Postman4ExcelBehavior::getCssClass("odd"),
            //    'evenCssClass' => Postman4ExcelBehavior::getCssClass("even"),
            // ]
		];
		$excel_file = "Data Transaksi Penjualana - ".$cek." ";
		$this->export4excel($excel_content, $excel_file,0);
        } else {
            return $this->redirect(['index']);
        }
        
    }

    // THE CONTROLLER
public function actionSubaccess() {
    $out = [];
    
    $paramCari=Yii::$app->getRequest()->getQueryParam('TGL');
    if (!empty($paramCari)) {
        // $parents = $_POST['TGL'];
            $date = explode(" - ", $paramCari);
            $data= PpobTransaksi::find()->where(['between','TGL',$date[0],$date[1]])->count();
           if ($data>0) {
            $access= PpobTransaksi::find()->where(['between','TGL',$date[0],$date[1]])->groupBy(['ACCESS_GROUP'])->all();
            foreach($access as $accesss){
                echo "<option value='".$accesss->ACCESS_GROUP."'>".$accesss->ACCESS_GROUP."</option>";
            }
            return;
           } else {
               echo "<option> - </option>";
               return;
           }

            // echo ;
    }
    // echo Json::encode(['output'=>'', 'selected'=>'']);
}
public function actionSubstore() {
    $paramCari=Yii::$app->getRequest()->getQueryParam('ACCESS_GROUP');
    if (!empty($paramCari)) {
            $data= PpobTransaksi::find()->where(['STORE_ID',$paramCari])->count();
           if ($data>0) {
            $store= PpobTransaksi::find()->where(['STORE_ID',$paramCari])->groupBy(['STORE_ID'])->all();
            foreach($store as $stores){
                echo "<option value='".$stores->STORE_ID."'>".$stores->ACCESS_GROUP."</option>";
            }
            return;
           } else {
               echo "<option> - </option>";
               return;
           }
    }
}
 
}
