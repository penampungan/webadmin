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
$this->title = 'PPOB-Master';
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
    #w4 :link {
        color: black;
    }
    /* mouse over link */
    #w4-container a:hover {
        color: #5a96e7;
    }
    /* selected link */
    #w4-container a:active {
        color: blue;
    }
");

$this->registerJs($this->render('ppobMaster_script.js'),View::POS_READY);
echo $this->render('ppobMaster_button'); //echo difinition
echo $this->render('ppobMaster_modal'); //echo difinition
echo $this->render('ppobMaster_colum'); //echo difinition

$Header=$this->render('_index_tab_hedear',[
	'searchModelHeader' => $searchModelHeader,
    'dataProviderHeader' => $dataProviderHeader,
]);

$kelompok=$this->render('_index_tab_kelompok',[
	'searchModelKelompok' => $searchModelKelompok,
    'dataProviderKelompok' => $dataProviderKelompok,
]);
$provider=$this->render('_index_tab_provider',[
    'searchModelProvider' => $searchModelProvider,
    'dataProviderProvider' => $dataProviderProvider,
]);

$mastertype=$this->render('_index_tab_type',[
    'searchModelMasterType' => $searchModelMasterType,
    'dataProviderMasterType' => $dataProviderMasterType,
]);


$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Jenis Paket',
        'content'=>$Header,
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Jenis Transaksi',
        'content'=>$kelompok
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Provider',
        'content'=>$provider
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Type Pembayaran',
        'content'=>$mastertype
    ],
];

$tabIndex=TabsX::widget([
    'items'=>$items,
	'enableStickyTabs'=>true,
    'encodeLabels'=>false
]);


?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
<?=$vewBreadcrumb?>
    <div style="margin-top: -10px;margin-bottom: 10px;">
		<?php//tombolKembali()?>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
			<?=$tabIndex?>
		</div>
	</div>
</div>
