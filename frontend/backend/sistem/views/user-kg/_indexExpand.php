<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use common\models\StoreSearch;
use frontend\backend\sistem\models\UserKg;
use frontend\backend\sistem\models\UserKgSearch;
use frontend\backend\sistem\models\ProductSearch;
use frontend\backend\sistem\models\CustomerSearch;
use frontend\backend\sistem\models\KaryawanSearch;
use common\models\Userlogin;
	
	$this->registerCss("
		#expand-menu :link {
			color:black;
		}
		//mouse over link
		#expand-menu a:hover {
			color: black;
		}
		//selected link
		a:active {
			color: black;
		}
		.kv-panel {
			//min-height: 340px;
			height: 300px;
		}
		// #expand-menu .kv-grid-container{
			// height:250px
		// }
	");

	$headerColor='rgba(128, 179, 178, 1)';

	/*
	 * GRIDVIEW COLUMN
	 * @author ptrnov [ptr.nov@gmail.com]
	 * @since 1.2
	*/	
				
	$attDinamikMenu[]=[	
		'class'=>'kartik\grid\ExpandRowColumn',
		'width'=>'10px',
		'header'=>'<span class="glyphicon glyphicon glyphicon-th-list"></span>',
		'mergeHeader'=>true,
		'allowBatchToggle'=>false,			
		'value'=>function ($model, $key, $index, $column) {
			return GridView::ROW_COLLAPSED;
		},
		'expandOneOnly'=>true,
		'expandIcon'=>'<span class="glyphicon glyphicon-chevron-right"></span>',
		'collapseIcon'=>'<span class="glyphicon glyphicon-chevron-down"></span>',
		'expandTitle'=>'Click Icon',
		'collapseTitle'=>'Click Icon',			
		'detail'=>function ($model, $key, $index, $column){
			// print_r($model);die();
			$paramCari=Yii::$app->getRequest()->getQueryParam('UserKg');
			// print_r($paramCari);die();
			$id=$model['id'];
            $userId=$model['ACCESS_ID'];
            // print_r($userId);die();
			$user=UserKg::find()->orderBy(['ACCESS_ID'=>SORT_ASC])->One();
			
			if($id==1){ 
				//== Detail Profile ==	
				if (empty($paramCari)) {
					$modelUser = UserKgSearch::find()->where(['ACCESS_ID'=>$user->ACCESS_ID])->one();
				} else {
					$modelUser = UserKgSearch::find()->where(['ACCESS_ID'=>$userId])->one();
				}		
				return Yii::$app->controller->renderPartial('_indexUserProfile',[
					'modelUser'=>$modelUser
				]);
			}elseif($id==2){
				//== Detail Store==
				if (empty($paramCari)) {
					$searchModelStore = StoreSearch::find()->where(['ACCESS_GROUP'=>$user->ACCESS_ID])->all();
					$dataProviderStore = new ArrayDataProvider([
						'allModels'=>$searchModelStore,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);	
				} else {
					$searchModelStore = StoreSearch::find()->where(['ACCESS_GROUP'=>$userId])->all();
					$dataProviderStore = new ArrayDataProvider([
						'allModels'=>$searchModelStore,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);	
				}

				return Yii::$app->controller->renderPartial('_indexStore',[
					//'storeId'=>$storeId,
					'dataProviderStore'=>$dataProviderStore
                ]);
			}elseif($id==3){
				//== Detail Prodak==
				if (empty($paramCari)) {
					$searchModel = ProductSearch::find()->select('product.*,STORE_NM')->leftJoin('store','product.STORE_ID=store.STORE_ID')->leftJoin('user','store.ACCESS_GROUP=user.ACCESS_ID')->where(['user.ACCESS_ID'=>$user->ACCESS_ID])->orderBy('STORE_NM',SORT_ASC)->all();
					$dataProviderProdak =new ArrayDataProvider([
						'allModels'=>$searchModel,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);	
				} else {				
					$searchModel = ProductSearch::find()->select('product.*,STORE_NM')->leftJoin('store','product.STORE_ID=store.STORE_ID')->leftJoin('user','store.ACCESS_GROUP=user.ACCESS_ID')->where(['user.ACCESS_ID'=>$userId])->all();
					$dataProviderProdak =new ArrayDataProvider([
						'allModels'=>$searchModel,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);	
				}
				return Yii::$app->controller->renderPartial('_indexProduk',[
					// 'storeId'=>$storeId,
					'dataProviderProdak'=>$dataProviderProdak
				]);
			}elseif($id==4){
				//== Detail Karyawan==
				if (empty($paramCari)) {
					$searchModelKar = KaryawanSearch::find()->select('karyawan.*,STORE_NM')->leftJoin('store','karyawan.STORE_ID=store.STORE_ID')->leftJoin('user','store.ACCESS_GROUP=user.ACCESS_ID')->where(['user.ACCESS_ID'=>$user->ACCESS_ID])->all();
					$dataProviderKar =new ArrayDataProvider([
						'allModels'=>$searchModelKar,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);
				} else {
					$searchModelKar = KaryawanSearch::find()->select('karyawan.*,STORE_NM')->leftJoin('store','karyawan.STORE_ID=store.STORE_ID')->leftJoin('user','store.ACCESS_GROUP=user.ACCESS_ID')->where(['user.ACCESS_ID'=>$userId])->all();
					$dataProviderKar =new ArrayDataProvider([
						'allModels'=>$searchModelKar,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);
				}								
				return Yii::$app->controller->renderPartial('_indexKaryawan',[
					// 'storeId'=>$storeId,
					'dataProviderKar'=>$dataProviderKar
				]);
			}elseif($id==5){
				//== Detail User Operatioal==
				if (empty($paramCari)) {
					$modalUser=UserKg::find()->where(['ACCESS_GROUP'=>$user->ACCESS_ID,'ACCESS_LEVEL'=>'OPS'])->all();
					$dataProviderUserOps= new ArrayDataProvider([
						'allModels'=>$modalUser,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);
				} else {
					$modalUser=UserKg::find()->where(['ACCESS_GROUP'=>$userId,'ACCESS_LEVEL'=>'OPS'])->all();
					$dataProviderUserOps= new ArrayDataProvider([
						'allModels'=>$modalUser,	
						'pagination' => [
							'pageSize' => 20,
						],
					]);	
				}				
				return Yii::$app->controller->renderPartial('_indexUserOps',[
					'userId'=>$userId,
					'dataProviderUserOps'=>$dataProviderUserOps
				]);
			}
		},
		'headerOptions'=>[
			'style'=>[
				'text-align'=>'center',
				'width'=>'10px',
				'font-family'=>'verdana, arial, sans-serif',
				'font-size'=>'10pt',
				'background-color'=>$headerColor,
				'color'=>'white',
			]
		],
		'contentOptions'=>[
			'style'=>[
				'text-align'=>'center',
				'width'=>'10px',
				'font-family'=>'tahoma, arial, sans-serif',
				'font-size'=>'10pt',
			]
		],			
	];
	
	$attDinamikMenu[] =[
		'attribute'=>'TITTLE_NM',
		'filterType'=>true,
		'filterOptions'=>Yii::$app->gv->gvFilterContainHeader('0','250px'),
		'hAlign'=>'right',
		'vAlign'=>'middle',
		'header'=>'Informasi ',
		'mergeHeader'=>true,
		'format'=>'html',
		'noWrap'=>false,
		'format'=>'raw',
		'headerOptions'=>Yii::$app->gv->gvContainHeader('center','300px',$headerColor,'#ffffff'),
		'contentOptions'=>Yii::$app->gv->gvContainBody('left','300px',''),			
	];
	
	
	$expandMenu= GridView::widget([
		'id'=>'expand-menu',
		'dataProvider' => $dataProviderMenu,
		'columns' =>$attDinamikMenu,
		'toolbar' => [
			'{export}',
		],
		'panel'=>false,		
		'pjax'=>true,
		'pjaxSettings'=>[
			'options'=>[
				'enablePushState'=>false,
				'id'=>'expand-menu',
			],
		],
		'bootstrap'=>true,
		'hover'=>true, //cursor select
		'responsive'=>true,
		'bordered'=>true,
		'striped'=>true,
		'export'=>[//export like view grid --ptr.nov-
			'fontAwesome'=>true,
			'showConfirmAlert'=>false,
			'target'=>GridView::TARGET_BLANK
		],
		'summary'=>false,
	]);

?>
<?=$expandMenu?>