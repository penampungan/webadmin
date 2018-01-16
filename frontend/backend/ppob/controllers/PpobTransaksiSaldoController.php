<?php

namespace frontend\backend\ppob\controllers;

use Yii;
use frontend\backend\ppob\models\PpobTransaksiSaldo;
use frontend\backend\ppob\models\PpobTransaksiSaldoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use ptrnov\postman4excel\Postman4ExcelBehavior;
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
        /**
         * validasi apa gt.....
         * create by irfan@gmail.com
         */
        if (empty($paramCari)) {
            // $dataProviderDetail = PpobTransaksiSaldo::find()->where(['STATUS'=>'0'])->orderBy(['TRANS_ID'=>SORT_ASC])->one();
            $dataProviderDetail = new PpobTransaksiSaldo();
        } else { 
            $dataProviderDetail = PpobTransaksiSaldo::find()->where(['TRANS_ID'=>$paramCari])->one();
        }
        // print_r($dataProviderDetail);die();        
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

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['index']);   
        }

        // return $this->renderAjax('update', [
        //     'model' => $model,
        // ]);
        
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

    public function actionExportFile(){
        
            $date = date('Y-m-d',strtotime('-3 month',strtotime(date('Y-m-d')))).' - '.date('Y-m-d');
            // print_r($date);die();
            $tanggal = explode(" - ", $date);
			$cari=['tgllama'=>$tanggal[0],'tglbaru'=>$tanggal[1]];			
        // print_r($cari);die();
		$searchModel = new PpobTransaksiSaldoSearch($cari);
		$dataProvider=$searchModel->searchExcelExport(Yii::$app->request->queryParams);
		$dataProviderNew=$searchModel->searchExcelExportNew(Yii::$app->request->queryParams);
		$dataProviderPaid=$searchModel->searchExcelExportPaid(Yii::$app->request->queryParams);
		$dataProviderMutasi=$searchModel->searchExcelExportMutasi(Yii::$app->request->queryParams);
		$dataProviderExpierd=$searchModel->searchExcelExportExpierd(Yii::$app->request->queryParams);
		$dataProviderAmbil=$searchModel->searchExcelExportAmbil(Yii::$app->request->queryParams);
    
        $aryPaid=$dataProvider->allModels;	
		$aryPaid2=$dataProviderNew->allModels;	
		$aryPaid3=$dataProviderPaid->allModels;	
		$aryPaid4=$dataProviderMutasi->allModels;	
		$aryPaid5=$dataProviderExpierd->allModels;	
        $aryPaid6=$dataProviderAmbil->allModels;
        if (!empty($aryPaid)) {
            
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid);
        $excel_titlePaid = $excel_dataPaid['excel_title'];
        $excel_ceilsPaid = $excel_dataPaid['excel_ceils']; 

        // print_r(isset($excel_ceilsPaid));die();
        if (!empty($excel_ceilsPaid)) {
	
            $excel_content[] = 
                [
                    'sheet_name' =>'Seluruh Transaksi Deposit',
                    'sheet_title' => [
                        ['TRANS ID', 'STORE ID', 'ACCESS GROUP', 'TRANS DATE', 'Tanggal', 'WAKTU', 'SALDO DEPOSIT', 'DES_STORE', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM']
                    ],
                    'ceils' => $excel_ceilsPaid,
                    'freezePane' => 'A2',
                    'columnGroup'=>false,
                    'autoSize'=>false,
                    'headerColor' => Postman4ExcelBehavior::getCssClass('header'),
                    'headerStyle'=>[					
                        [
                            'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
                            'STORE_ID' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
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
                            'TRANS_DATE' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
                            'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
                        ]
                    ],
                   'oddCssClass' => Postman4ExcelBehavior::getCssClass('odd'),
                   'evenCssClass' => Postman4ExcelBehavior::getCssClass('even'),
                ];                
        }
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid);
        $excel_titlePaid = $excel_dataPaid['excel_title'];
        $excel_ceilsPaid2 = $excel_dataPaid['excel_ceils']; 

        // print_r(isset($excel_ceilsPaid));die();
        if (!empty($excel_ceilsPaid2)) {
	
            $excel_content[] = 
                [
                    'sheet_name' =>'Seluruh Transaksi Deposit',
                    'sheet_title' => [
                        ['TRANS ID', 'STORE ID', 'ACCESS GROUP', 'TRANS DATE', 'Tanggal', 'WAKTU', 'SALDO DEPOSIT', 'DES_STORE', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM']
                    ],
                    'ceils' => $excel_ceilsPaid2,
                    'freezePane' => 'A2',
                    'columnGroup'=>false,
                    'autoSize'=>false,
                    'headerColor' => Postman4ExcelBehavior::getCssClass('header'),
                    'headerStyle'=>[					
                        [
                            'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
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
                            'TRANS_DATE' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
                            'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
                        ]
                    ],
                   'oddCssClass' => Postman4ExcelBehavior::getCssClass('odd'),
                   'evenCssClass' => Postman4ExcelBehavior::getCssClass('even'),
                ];                
        }
		$excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid2);
        $excel_ceilsPaid3 = $excel_dataPaid['excel_ceils'];
            if (!empty($excel_ceilsPaid3)) {
                $excel_content[] = 
                [
				'sheet_name' =>'Transaksi Penjualan Baru',
                'sheet_title' => [
                    ['TRANS ID', 'STORE ID', 'ACCESS GROUP', 'TRANS DATE', 'Tanggal', 'WAKTU', 'SALDO DEPOSIT', 'DES_STORE', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM']
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
						'TRANS_DATE' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
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
						'TRANS_DATE' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
						'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
						'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
						'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
					]
				],
               'oddCssClass' => Postman4ExcelBehavior::getCssClass("odd"),
               'evenCssClass' => Postman4ExcelBehavior::getCssClass("even"),
                ]; 
            }
        $excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid3);
        $excel_ceilsPaid4 = $excel_dataPaid['excel_ceils'];
            if (!empty($excel_ceilsPaid4)) {
                $excel_content[] = 
                [
                 'sheet_name' =>'Transaksi Penjualan Pending',
                'sheet_title' => [
                    ['TRANS ID', 'STORE ID', 'ACCESS GROUP', 'TRANS DATE', 'Tanggal', 'WAKTU', 'SALDO DEPOSIT', 'DES_STORE', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM']
                ],
			    'ceils' => $excel_ceilsPaid4,
                'freezePane' => 'A2',
                'columnGroup'=>false,
                'autoSize'=>false,
                'headerColor' => Postman4ExcelBehavior::getCssClass("header"),
                'headerStyle'=>[					
					[
						'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
						'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
						'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
						'TRANS_DATE' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
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
						'TRANS_DATE' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
						'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
						'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
						'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
					]
				],
               'oddCssClass' => Postman4ExcelBehavior::getCssClass("odd"),
               'evenCssClass' => Postman4ExcelBehavior::getCssClass("even"),
            ];   
            }
        $excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid4);
        $excel_ceilsPaid5 = $excel_dataPaid['excel_ceils'];

            if (!empty($excel_ceilsPaid5)) {
                $excel_content[] = 
                [
                    'sheet_name' =>'Transaksi Penjualan Success',
                    'sheet_title' => [
                        ['TRANS ID', 'STORE ID', 'ACCESS GROUP', 'TRANS DATE', 'Tanggal', 'WAKTU', 'SALDO DEPOSIT', 'DES_STORE', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM']
                    ],
                    'ceils' => $excel_ceilsPaid5,
                    'freezePane' => 'A2',
                    'columnGroup'=>false,
                    'autoSize'=>false,
                    'headerColor' => Postman4ExcelBehavior::getCssClass('header'),
                    'headerStyle'=>[					
                        [
                            'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
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
                            'TRANS_DATE' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
                            'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
                        ]
                    ],
                   'oddCssClass' => Postman4ExcelBehavior::getCssClass('odd'),
                   'evenCssClass' => Postman4ExcelBehavior::getCssClass('even'),
                ];
            }
        $excel_dataPaid = Postman4ExcelBehavior::excelDataFormat($aryPaid5);
        $excel_ceilsPaid6 = $excel_dataPaid['excel_ceils'];
            if (!empty($excel_ceilsPaid6)) {
                $excel_content[] = 
                [
                    'sheet_name' =>'Transaksi Penjualan Gagal',
                    'sheet_title' => [
                        ['TRANS ID', 'STORE ID', 'ACCESS GROUP', 'TRANS DATE', 'Tanggal', 'WAKTU', 'SALDO DEPOSIT', 'DES_STORE', 'SALDO_CURRENT', 'SALDO_MUTASI', 'SALDO_BACK', 'METODE_PEMBAYARAN', 'DESTINATION_ACCOUNT_NM', 'DESTINATION_ACCOUNT_NO', 'SOURCE_ACCOUNT_NM', 'SOURCE_ACCOUNT_NO', 'EMAIL', 'KETERANGAN', 'STATUS_NM']
                    ],
                    'ceils' => $excel_ceilsPaid6,
                    'freezePane' => 'A2',
                    'columnGroup'=>false,
                    'autoSize'=>false,
                    'headerColor' => Postman4ExcelBehavior::getCssClass('header'),
                    'headerStyle'=>[					
                        [
                            'TRANS_ID' =>['font-size'=>'8','width'=>'12','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' =>['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TGL' => ['font-size'=>'8','width'=>'20','valign'=>'center','align'=>'center'],
                            'TRANS_DATE' => ['font-size'=>'8','width'=>'15','valign'=>'center','align'=>'center'],
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
                            'TRANS_DATE' => ['font-size'=>'8','valign'=>'center','align'=>'right'],
                            'ACCESS_GROUP' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'STORE_ID' =>['font-size'=>'8','valign'=>'center','align'=>'center'],
                            'ID_PRODUK' =>['font-size'=>'8','valign'=>'center','align'=>'center']
                        ]
                    ],
                   'oddCssClass' => Postman4ExcelBehavior::getCssClass('odd'),
                   'evenCssClass' => Postman4ExcelBehavior::getCssClass('even'),
                ];
            }
		$excel_file = "Data Transaksi Penjualana - ".$date." ";
		$this->export4excel($excel_content, $excel_file,0);
        } else {
            return $this->redirect(['index']);
        }
        
    }
}
