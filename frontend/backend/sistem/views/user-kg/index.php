<?php
use yii\helpers\Html;
use kartik\widgets\Select2;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use kartik\widgets\Spinner;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\widgets\FileInput;
use yii\helpers\Json;
use yii\web\Response;
use yii\widgets\Pjax;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use yii\data\ArrayDataProvider;
use yii\web\View;

$this->registerCss("
	:link {
		color: #fdfdfd;
	}
	/* mouse over link */
	a:hover {
		color: #5a96e7;
	}
	/* selected link */
	a:active {
		color: blue;
	}
	#gv-data-industri .kv-grid-container{
			height:400px
		}
");
	/**
	 * Import Data
	*/
	$_indexUser=$this->render('_indexUser',[
		'dataProvider' => $dataProvider,
		'searchModel' => $searchModel			
	]);
	
	$aryData1=[
		'0'=>['id'=>'1','TITTLE_NM'=>'<span class="fa-stack fa-lg text-left">
						  <b class="fa fa-circle fa-stack-2x" style="color:#40B0B5"></b>
						  <b class="fa fa-home fa-stack-1x" style="color:#FEFEFE"></b>
						</span><b> USER PROFILE </b>'],
		'1'=>['id'=>'2','TITTLE_NM'=>'<span class="fa-stack fa-lg text-left">
						  <b class="fa fa-circle fa-stack-2x" style="color:#40B0B5"></b>
						  <b class="fa fa-product-hunt fa-stack-1x" style="color:#FEFEFE"></b>
						</span><b> DAFTAR STORE </b>'],
		'2'=>['id'=>'3','TITTLE_NM'=>'<span class="fa-stack fa-lg text-left">
						  <b class="fa fa-circle fa-stack-2x" style="color:#40B0B5"></b>
						  <b class="fa fa-users fa-stack-1x" style="color:#FEFEFE"></b>
						</span><b> DAFTAR PRODUK </b>'],
		'3'=>['id'=>'4','TITTLE_NM'=>'<span class="fa-stack fa-lg text-left">
						  <b class="fa fa-circle fa-stack-2x" style="color:#40B0B5"></b>
						  <b class="fa fa-user fa-stack-1x" style="color:#FEFEFE"></b>
						</span><b> DAFTAR KARAWAN </b>'],
		'4'=>['id'=>'5','TITTLE_NM'=>'<span class="fa-stack fa-lg text-left">
						  <b class="fa fa-circle fa-stack-2x" style="color:#40B0B5"></b>
						  <b class="fa fa-user-secret fa-stack-1x" style="color:#FEFEFE"></b>
						</span><b> DAFTAR USER OPRASIONAL </b>']
	];
	//$key = 'STORE_ID';
	$cookies = Yii::$app->request->cookies;
	//$data = \Yii::$app->getRequest()->getCookies();//->getValue('STORE_ID');
	$storeId = $cookies->getValue('ACCESS_ID');
	// print_r($storeId);
	// die();
	//$data = Yii::$app->cache;
	$aryData2=[
		'0'=>['ACCESS_ID'=>$storeId],
		'1'=>['ACCESS_ID'=>$storeId],
		'2'=>['ACCESS_ID'=>$storeId],
		'3'=>['ACCESS_ID'=>$storeId],
		'4'=>['ACCESS_ID'=>$storeId],
	];	
	
	foreach($aryData1 as $rows =>$val){
		$aryMrg[]=ArrayHelper::merge($aryData1[$rows],$aryData2[$rows]);
	};
	// print_r($aryMrg);
	// die();
	$dataProviderMenu= new ArrayDataProvider([	
			'allModels'=>$aryMrg,	
			'pagination' => [
				'pageSize' => count($aryMrg),
			],
		]);
	
	
	
	$_indexExpand=$this->render('_indexExpand',[
		'dataProviderMenu' => $dataProviderMenu,
		// 'storeNm'=>$storeNm,
		'model'=>$model
	]);
		
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-lg-4" style="font-family: tahoma ;font-size: 8pt;">
			<div class="row">		
			<?=$_indexUser?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-lg-8" style="font-family: tahoma ;font-size: 8pt;">
			<div class="row">		
				<div  style="padding-top:10px">				
					<?=$_indexExpand?>
				</div>		
			</div>		
		</div>
	</div>
</div>