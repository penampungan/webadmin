<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\base\DynamicModel;
	
	/*
	 * BUTTON CREATE
	*/
	function tombolCreate(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/ppob/ppob-transaksi-saldo/create']);
		$options1 = ['value'=>$url,
					'id'=>'ppobtransaksisaldo-button-create',
					'data-pjax' => false,
					'class'=>"btn btn-success btn-xs",
					'title'=>'Tambah'
		];
		$icon1 = '<span class="fa-stack fa-sm text-left">
				  <b class="fa fa-circle fa-stack-2x" style="color:#ffffff"></b>
				  <b class="fa fa-plus fa-stack-1x" style="color:#000000"></b>
				</span>
		';
		$label1 = $icon1.' '.$title ;
		$content = Html::button($label1,$options1);
		return $content;		
	}
	
	/*
	 *  BUTTON VIEW
	*/
	function tombolView($url, $model){
		$title1 = Yii::t('app',' View');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-transaksi-saldo/view','ID' => $model['ID'], 'STORE_ID' => $model['STORE_ID'], 'TRANS_DATE' => $model['TRANS_DATE']]),
			'id'=>'ppobtransaksisaldo-button-view',
			'class'=>"btn btn-default btn-xs",    
			'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
		];
		$icon1 = '
			<span class="fa-stack fa-xs">																	
				<i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
				<i class="fa fa-eye fa-stack-1x" style="color:black"></i>
			</span>
		';      
		$label1 = $icon1 . '  ' . $title1;
		$content = Html::button($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
	
	/*
	 * BUTTON UPDATE
	*/
	function tombolUpdate($url, $model){
		$title1 = Yii::t('app',' Edit');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-transaksi-saldo/update','ID' => $model['ID'], 'STORE_ID' => $model['STORE_ID'], 'TRANS_DATE' => $model['TRANS_DATE']]),
			'id'=>'ppobtransaksisaldo-button-update',
			'class'=>"btn btn-default btn-xs",    
			'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
		];
		$icon1 = '
			<span class="fa-stack fa-xs">																	
				<i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
				<i class="fa fa-edit fa-stack-1x" style="color:black"></i>
			</span>
		';      
		$label1 = $icon1 . '  ' . $title1;
		$content = Html::button($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
	/*
	 * BUTTON Deposit
	*/
	function tombolDeposit($url, $model){
		$title1 = Yii::t('app',' Deposit');
		$options1 = [
			///'href'=>url::to(['/ppob/ppob-transaksi-saldo/deposit','ID' => $model['ID'], 'STORE_ID' => $model['STORE_ID'], 'TRANS_DATE' => $model['TRANS_DATE']]),
			'class'=>"btn btn-default btn-xs",     
			'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
		];
		$icon1 = '
			<span class="fa-stack fa-xs">																	
				<i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
				<i class="fa fa-thumbs-up fa-stack-1x" style="color:black"></i>
			</span>
		';      
		$label1 = $icon1 . '  ' . $title1;
		$content = Html::a($label1,url::to(['/ppob/ppob-transaksi-saldo/deposit','ID' => $model['ID'], 'STORE_ID' => $model['STORE_ID'], 'TRANS_DATE' => $model['TRANS_DATE']]),$options1);		
		return '<li>'.$content.'</li>';
	}
	/*
	 * BUTTON Ambil
	*/
	function tombolAmbil($url, $model){
		$title1 = Yii::t('app',' Pengembalian Saldo');
		$options1 = [
			// 'value'=>url::to(['/ppob/ppob-transaksi-saldo/ambil','ID' => $model['ID'], 'STORE_ID' => $model['STORE_ID'], 'TRANS_DATE' => $model['TRANS_DATE']]),
			'class'=>"btn btn-default btn-xs",    
			'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
		];
		$icon1 = '
			<span class="fa-stack fa-xs">																	
				<i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
				<i class="fa fa-thumbs-down fa-stack-1x" style="color:black"></i>
			</span>
		';      
		$label1 = $icon1 . '  ' . $title1;
		$content = Html::a($label1,url::to(['/ppob/ppob-transaksi-saldo/ambil','ID' => $model['ID'], 'STORE_ID' => $model['STORE_ID'], 'TRANS_DATE' => $model['TRANS_DATE']]),$options1);		
		return '<li>'.$content.'</li>';
	}
    
?>