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
$this->title = 'PPOB-Master Harga';
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
    #w2 :link {
        color: black;
    }
    /* mouse over link */
    #w2-container a:hover {
        color: #5a96e7;
    }
    /* selected link */
    #w2-container a:active {
        color: blue;
    }
");

$this->registerJs($this->render('ppobMasterHarga_script.js'),View::POS_READY);
echo $this->render('ppobMasterHarga_button'); //echo difinition
echo $this->render('ppobMasterHarga_modal'); //echo difinition
echo $this->render('ppobMasterHarga_colum'); //echo difinition

$hargaExist=$this->render('_index_tab1',[
	'searchModel' => $searchModel,
	'dataProvider' => $dataProvider,
]);

$hargaUpdate=$this->render('_index_tab2',[
	'searchModel' => $searchModel,
	'dataProvider' => $dataProviderUpdate,
]);


$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Harga',
        'content'=>$hargaExist,
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Update harga',
        'content'=>$hargaUpdate
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
