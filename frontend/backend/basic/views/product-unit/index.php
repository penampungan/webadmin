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
$this->title = 'Produk Unit';

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
	<div class="col-xs-6 col-sm-4 col-lg-4" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
			<?=$indexGroup?>
		</div>
	</div>
    <div class="col-xs-6 col-sm-8 col-lg-8" style="font-family: tahoma ;font-size: 9pt;">
		<div class="row">
			<?=$indexDetail?>
		</div>
	</div>
</div>