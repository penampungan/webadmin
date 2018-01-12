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

?>

<div class="ppob-transaksi-create">

<div class="ppob-transaksi-form">
   <?php $form = ActiveForm::begin([
			'id'=> $modelPeriode->formName(),			
			'enableClientValidation'=> true,
			//'enableAjaxValidation'=>true,
			//'method' => 'post',
			//'validationUrl'=>Url::toRoute('/inventory/stock-opname/valid')
			'action' =>['/ppob/ppob-transaksi/index']
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
										$('select#date-id').html(result);
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
					'id'=>'date-id',
					'placeholder' => 'Select a state ...'
				],
				'pluginOptions' => [
					'allowClear' => true
				],
				'pluginEvents' => [					
					'onchange'=>'$.post("/ppob/ppob-transaksi/subaccess?ACCESS_GROUP='.'"+$("#date-id").val(),
						function(data){
							alert("tes");
						})'
				]
			]);?>

			<?= $form->field($modelPeriode, 'STORE_ID')->widget(Select2::classname(), [
				// 'data' => ArrayHelper::map(PpobTransaksi::find()->all(),'STORE_ID','STORE_ID'),
				'options' => ['id'=>'date-id-store','placeholder' => 'Select a state ...'],
				'pluginOptions' => [
					'allowClear' => true
				],'pluginEvents' => [
					"select2:select" => "function() {
						var ACCESS_GROUP = $('#date-id').val();
						alert(ACCESS_GROUP)
						// $(document).onChange('ACCESS_GROUP', function (){
							$.ajax({                                      
							  url: '/ppob/ppob-transaksi/subaccess',              
							  type: 'GET',
							  data: 'ACCESS_GROUP='+ACCESS_GROUP,
							  success: function(result){
								$('select#date-id-store').html(result);
							  },
							  error: function(){
								alert('failure');
							  } 
						   });
						// });
					 }",
				]
				]);?>

			<div class="form-group">
					<?=Html::submitButton('CARI',['class' => 'btn btn-success']); ?>
			</div>

<?php ActiveForm::end(); ?>

</div>
</div>