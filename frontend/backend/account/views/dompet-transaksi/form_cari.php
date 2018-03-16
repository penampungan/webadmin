<?php
use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use kartik\widgets\FileInput;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use kartik\widgets\DatePicker;
use kartik\widgets\DateTimePicker;

?>
   <?php $form = ActiveForm::begin([
			'id'=> $modelPeriode->formName(),
			'method' => 'get',			
			'enableClientValidation'=> true,
			'action' =>['/account/dompet-transaksi/index']
   ]); ?>
		<div style="height:100%;font-family: verdana, arial, sans-serif ;font-size: 6pt;">
		<div class="row" >
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php
						echo $form->field($modelPeriode, 'OWNER')->widget(Select2::classname(), [
							'data' =>ArrayHelper::map($data,'ACCESS_GROUP', function($modelPeriode) {
								return $modelPeriode['NAMA'].' / '.$modelPeriode['username'];
							}),
							'options' => ['placeholder' => 'Select a state ...','id'=>'owner_id'],
							'pluginOptions' => [
								'allowClear' => true
							],
						])->label('OWNER');		
					?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?= $form->field($modelPeriode, 'STORE_ID')->widget(DepDrop::classname(), [
						'type'=>DepDrop::TYPE_SELECT2,
							'options'=>['id'=>'store-id'],
							'pluginOptions'=>[
								'depends'=>['owner_id'],
								'placeholder'=>'Select...',
								'url'=>Url::to(['/account/dompet-transaksi/store'])
							]
						]); ?>
				</div>
					
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<?=Html::submitButton('CARI',['class' => 'btn btn-success']); ?>
			</div>
		</div>
	</div>
<?php ActiveForm::end(); ?>

