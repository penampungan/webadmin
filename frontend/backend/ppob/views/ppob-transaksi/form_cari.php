<?php
use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use kartik\widgets\FileInput;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use kartik\daterange\DateRangePicker;
use kartik\depdrop\DepDropAction;
use yii\web\JsExpression;
use frontend\backend\ppob\models\PpobTransaksi;
use yii\web\View;

$this->registerJs("
	$('#date-id-y').change(function() { 
		change();
	 });
	 function change()
	 {
		 var selectValue=$('#date-id-y').val();
		 $('#date-id-store').empty();
		 $.post('/ppob/ppob-transaksi/substore?ACCESS_GROUP='+selectValue,
			function(data){
				$('select#date-id-store').html(data);
			});

	 };
",View::POS_READY);
?>

<div class="ppob-transaksi-create">

<div class="ppob-transaksi-form">
   <?php $form = ActiveForm::begin([
			'id'=> $modelPeriode->formName(),			
			'enableClientValidation'=> true,
			//'enableAjaxValidation'=>true,
			//'method' => 'post',
			//'validationUrl'=>Url::toRoute('/inventory/stock-opname/valid')
			'action' =>['/ppob/ppob-transaksi/pencarian-index']
   ]); ?>
			   <?=$form->field($modelPeriode, 'TGL')->widget(DateRangePicker::classname(), [
						'options' => [
							'id'=>'date-id-x',
							'name'=>'TGL'
						],
						'useWithAddon'=>true,
						'presetDropdown'=>true,
						'hideInput'=>true,
						'pluginEvents' => [
							"apply.daterangepicker" => "function() {
								var TGL = $('#date-id-x').val();
									$.ajax({                                      
									  url: '/ppob/ppob-transaksi/subaccess',              
									  type: 'GET',
									  data: 'TGL='+TGL,
									  success: function(result){
										$('select#date-id-y').html(result);
									  },
									  error: function(){
										alert('failure');
									  } 
								   });
							 }",
							],
						'initRangeExpr' => true,
						'pluginOptions'=> [
							Yii::t('app', "Today") => ["moment().startOf('day')", "moment()"],
							Yii::t('app', "Yesterday") => ["moment().startOf('day').subtract(1,'days')", "moment().endOf('day').subtract(1,'days')"],
							Yii::t('app', "Last {n} Days", ['n' => 7]) => ["moment().startOf('day').subtract(6, 'days')", "moment()"],
							Yii::t('app', "Last {n} Days", ['n' => 30]) => ["moment().startOf('day').subtract(29, 'days')", "moment()"],
							Yii::t('app', "This Month") => ["moment().startOf('month')", "moment().endOf('month')"],
							Yii::t('app', "Last Month") => ["moment().subtract(1, 'month').startOf('month')", "moment().subtract(1, 'month').endOf('month')"],
						]
				]);
			?>
			<?= $form->field($modelPeriode, 'ACCESS_GROUP')->widget(Select2::classname(), [
				// 'data' => ArrayHelper::map(PpobTransaksi::find()->all(),'ACCESS_GROUP','ACCESS_GROUP'),
				'options' => [
					'id'=>'date-id-y',
					'placeholder' => 'Select a state ...',
				],
				'pluginOptions' => [
					'allowClear' => true,
				],
			]);?>

			<?= $form->field($modelPeriode, 'STORE_ID')->widget(Select2::classname(), [
				'options' => ['id'=>'date-id-store','placeholder' => 'Select a state ...',],
				]);?>

			<div class="form-group">
					<?=Html::submitButton('CARI',['class' => 'btn btn-success']); ?>
			</div>

<?php ActiveForm::end(); ?>

</div>
</div>