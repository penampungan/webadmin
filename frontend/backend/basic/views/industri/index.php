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

$this->registerJs($this->render('industri_script.js'),View::POS_READY);
echo $this->render('industri_button'); //echo difinition
echo $this->render('industri_modal'); //echo difinition
echo $this->render('industri_colum'); //echo difinition
$this->title = 'Industri';

$indexGroup=$this->render('indexGroup',[
    'searchModelGroup' => $searchModelGroup,
    'dataProviderGroup' => $dataProviderGroup,
]);
$indexIndustr=$this->render('indexDetail',[
    'searchModel' => $searchModel,
    'dataProvider' => $dataProvider,
]);
?>
<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="row">
			<div class="col-xs-6 col-sm-4 col-lg-4" style="font-family: tahoma ;font-size: 9pt;">
				<div class="row">
					<?=$indexGroup?>
				</div>
			</div>
			<div class="col-xs-6 col-sm-8 col-lg-8" style="font-family: tahoma ;font-size: 9pt;">
				<div class="row">
					<?=$indexIndustr?>
				</div>
			</div>
		</div>
	</div>
</div>