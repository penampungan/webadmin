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
$this->title = 'Produk Unit';
$this->params['breadcrumbs'][] = ['label'=>'Product Controller', 'url' => ['/basic/container-produk']];
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
	#gv-data-productunit .kv-grid-container{
			height:400px
		}
");

$this->registerJs($this->render('productUnit_script.js'),View::POS_READY);
echo $this->render('productUnit_button'); //echo difinition
echo $this->render('productUnit_modal'); //echo difinition
echo $this->render('productUnit_colum'); //echo difinition

$indexGroup=$this->render('indexGroup',[
    'searchModelGroup' => $searchModelGroup,
    'dataProviderGroup' => $dataProviderGroup,
]);

$indexDetail=$this->render('indexDetail',[
    'searchModel' => $searchModel,
    'dataProvider' => $dataProvider,
]);
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
<?=$vewBreadcrumb?>
<div style="margin-top: -10px;margin-bottom: 10px;">
		<?php//tombolKembali()?>
	</div>
		<div class="row">
		<div class="col-xs-6 col-sm-4 col-lg-4" style="font-family: tahoma ;font-size: 9pt;">
				<?=$indexGroup?>
			</div>
			<div class="col-xs-6 col-sm-8 col-lg-8" style="font-family: tahoma ;font-size: 9pt;">
				<?=$indexDetail?>
			</div>
		</div>
</div>