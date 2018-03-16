<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\base\DynamicModel;
	
	
	/*
	 *  BUTTON VIEW
	*/
	function tombolMemberkonsumer(){
		$title1 = Yii::t('app','Detail');
		$options1 = [
			'value'=>url::to(['/account/end-user/pencarian-index']),
			'id'=>'container-button-konsumer',
			'class'=>"btn bg-purple btn-flat margin",  
		];     
		
		$content = Html::button($title1,$options1);		
		return $content;
	}
	
	/*
	 * BUTTON UPDATE
	*/
	function tombolmembershippakage(){
		$title1 = Yii::t('app','Detail');		
		$url = Url::toRoute(['/account/store-membership-pakage']);
		$options1 = [
			'class'=>"btn bg-purple btn-flat margin",  
		];      
		
		$content = Html::a($title1,$url,$options1);		
		return $content;   
	}
    
    /*
	 * BUTTON Hapus
	*/
	function tombolstoremembership(){
		$title1 = Yii::t('app','Detail');
		$options1 = [
			'value'=>url::to(['/account/store-membership/pencarian-index']),
			'id'=>'container-button-membership',
			'class'=>"btn bg-purple btn-flat margin",  
		];     
		
		$content = Html::button($title1,$options1);		
		return $content;
	}
	/*
	 * BUTTON UPDATE
	*/
	function tombolmembershippaket(){
		$title1 = Yii::t('app','Detail');		
		$url = Url::toRoute(['/account/store-membership-paket']);
		$options1 = [
			'class'=>"btn bg-purple btn-flat margin",  
		];      
		
		$content = Html::a($title1,$url,$options1);		
		return $content;
	}

    /*
	 * BUTTON Hapus
	*/
	function tombolstorekasir(){
		$title1 = Yii::t('app','Detail');
		$options1 = [
			'value'=>url::to(['/account/store-kasir/pencarian-index']),
			'id'=>'container-button-kasir',
			'class'=>"btn bg-purple btn-flat margin",  
		];     
		
		$content = Html::button($title1,$options1);		
		return $content;
	}
	function tombolAccountDompet(){
		$title1 = Yii::t('app','Detail');
		$options1 = [
			'value'=>url::to(['/account/dompet-transaksi/pencarian-index']),
			'id'=>'container-button-dompet',
			'class'=>"btn bg-purple btn-flat margin",  
		];     
		
		$content = Html::button($title1,$options1);		
		return $content;
	}
?>