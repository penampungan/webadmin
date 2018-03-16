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
	function tombolCreateHedear(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/ppob/ppob-header/create']);
		$options1 = ['value'=>$url,
					'id'=>'ppobMasterHedear-button-create',
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
	function tombolViewHedear($url, $model){
		$title1 = Yii::t('app',' View');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-header/view','id'=>$model['ID']]),
			'id'=>'ppobMasterHedear-button-view',
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

	function tombolUpdateHedear($url, $model){
		$title1 = Yii::t('app',' Update');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-header/update','id'=>$model['ID']]),
			'id'=>'ppobMasterHedear-button-update',
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
	 * BUTTON CREATE
	*/
	function tombolCreateKelompok(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/ppob/ppob-master-kelompok/create']);
		$options1 = ['value'=>$url,
					'id'=>'ppobMasterKelompok-button-create',
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
	function tombolViewKelompok($url, $model){
		$title1 = Yii::t('app',' View');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-master-kelompok/view','id'=>$model['ID']]),
			'id'=>'ppobMasterKelompok-button-view',
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
	function tombolUpdateKelompok($url, $model){
		$title1 = Yii::t('app',' Update');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-master-kelompok/update','id'=>$model['ID']]),
			'id'=>'ppobMasterKelompok-button-update',
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
		// $content = Html::a($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
	/*
	 * BUTTON CREATE
	*/
	function tombolCreateProvider(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/ppob/ppob-provider/create']);
		$options1 = ['value'=>$url,
					'id'=>'ppobMasterProvider-button-create',
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
	function tombolViewProvider($url, $model){
		$title1 = Yii::t('app',' View');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-provider/view','id'=>$model['PROVIDER_ID']]),
			'id'=>'ppobMasterProvider-button-view',
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
	function tombolUpdateProvider($url, $model){
		$title1 = Yii::t('app',' Update');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-provider/update','id'=>$model['PROVIDER_ID']]),
			'id'=>'ppobMasterProvider-button-update',
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
		// $content = Html::a($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
	/*
	 * BUTTON CREATE
	*/
	function tombolCreateType(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/ppob/ppob-master-type/create']);
		$options1 = ['value'=>$url,
					'id'=>'ppobMasterType-button-create',
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
	function tombolViewType($url, $model){
		$title1 = Yii::t('app',' View');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-master-type/view','id'=>$model['TYPE_ID']]),
			'id'=>'ppobMasterType-button-view',
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
	function tombolUpdateType($url, $model){
		$title1 = Yii::t('app',' Update');
		$options1 = [
			'value'=>url::to(['/ppob/ppob-master-type/update','id'=>$model['TYPE_ID']]),
			'id'=>'ppobMasterType-button-update',
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
		// $content = Html::a($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
    
    
	
	function tombolKembali(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/ppob/container-ppob']);
		$options1 = [
					'id'=>'back-trafik',
					'class'=>"btn btn-xs",
					'title'=>'Kembali Menu Produk'
		];
		$icon1 = '<span class="fa-stack fa-md text-left">
				  <b class="fa fa-circle fa-stack-2x" style="color:black"></b>
				  <b class="fa fa fa fa-mail-reply fa-stack-1x" style="color:white"></b>
				</span>
		';
		$label1 = $icon1.' '.$title ;
		$content = Html::a($label1,$url,$options1);
		return $content;	
	}
?>