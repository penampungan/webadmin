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
use yii\web\View;	
$this->title = 'PPOB-Transaksi';
$this->params['breadcrumbs'][] = ['label'=>'PPOB Controller', 'url' => ['/ppob/container-ppob']];
	$this->params['breadcrumbs'][] = $this->title;
	$vewBreadcrumb=Breadcrumbs::widget([
		'homeLink' => [
			'label' => Html::encode(Yii::t('yii', 'Home')),
			'url' => Yii::$app->homeUrl,
		],
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]);	
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
	#gv-data-ppobtransaksi .kv-grid-container{
			height:400px
        }
    #w5 :link {
        color: black;
    }
    /* mouse over link */
    #w5-container a:hover {
        color: #5a96e7;
    }
    /* selected link */
    #w5-container a:active {
        color: blue;
    }
");
$this->registerJs($this->render('ppobTransaksi_script.js'),View::POS_READY);
echo $this->render('ppobTransaksi_button'); //echo difinition
echo $this->render('ppobTransaksi_modal'); //echo difinition
echo $this->render('ppobTransaksi_colum'); //echo difinition
echo $this->render('ppobTransaksi_colum_baru'); //echo difinition
echo $this->render('ppobTransaksi_colum_gagal'); //echo difinition
echo $this->render('ppobTransaksi_colum_pending'); //echo difinition
echo $this->render('ppobTransaksi_colum_success'); //echo difinition

$cookies = Yii::$app->request->cookies;
$storeId = $cookies->getValue('TGL');
$storeNm = $cookies->getValue('ACCESS_GROUP');
// $storeNm = $cookies->getValue('STORE_ID');

// print_r($storeId.$storeNm);die();
$All=$this->render('_indexAll',[
	'searchModel' => $searchModel,
	'dataProviderAll' => $dataProviderAll,
]);

$First=$this->render('_indexFirst',[
	'searchModel' => $searchModel,
	'dataProviderFirst' => $dataProviderFirst,
]);

$Pending=$this->render('_indexPending',[
	'searchModel' => $searchModel,
	'dataProviderPending' => $dataProviderPending,
]);

$Success=$this->render('_indexSuccess',[
	'searchModel' => $searchModel,
	'dataProviderSuccess' => $dataProviderSuccess,
]);

$Gagal=$this->render('_indexGagal',[
	'searchModel' => $searchModel,
	'dataProviderGagal' => $dataProviderGagal,
]);

$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Detail Seluruh Transaksi',
        'content'=>$All,
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Transaksi Baru',
        'content'=>$First
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Transaksi Pending',
        'content'=>$Pending
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Transaksi Success',
        'content'=>$Success
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Transaksi Gagal',
        'content'=>$Gagal
    ],
];

$tabIndex=TabsX::widget([
    'items'=>$items,
	'enableStickyTabs'=>true,
    'encodeLabels'=>false
]);

?>
<div class="container-fluid col-xs-12 col-md-12 col-sm-12 col-lg-12">
<?=$vewBreadcrumb?>
<div style="margin-top: -10px;margin-bottom:10px">
		<?php//tombolKembali()?>
    <div class="pull-right">
        <?=tombolSearchData()?>
    </div>
	</div>
</div>
<?=$tabIndex?>
