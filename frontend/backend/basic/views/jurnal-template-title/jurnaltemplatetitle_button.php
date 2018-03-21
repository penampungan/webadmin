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
		$url = Url::toRoute(['/basic/jurnal-template-title/create']);
		$options1 = ['value'=>$url,
					'id'=>'productunit-button-create',
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
			'value'=>url::to(['/basic/jurnal-template-title/view','RPT_TITLE_ID' => $model['RPT_TITLE_ID'], 'RPT_GROUP_ID' => $model['RPT_GROUP_ID']]),
			'id'=>'productunit-button-view',
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
			'value'=>url::to(['/basic/jurnal-template-title/update','RPT_TITLE_ID' => $model['RPT_TITLE_ID'], 'RPT_GROUP_ID' => $model['RPT_GROUP_ID']]),
			'id'=>'productunit-button-update',
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
	 * BUTTON Hapus
	*/
	function tombolDelete($url, $model){
		$title1 = Yii::t('app',' Hapus');
		$options1 = [
			'href'=>url::to(['/basic/jurnal-template-title/delete','RPT_TITLE_ID' => $model['RPT_TITLE_ID'], 'RPT_GROUP_ID' => $model['RPT_GROUP_ID']]),
			'class'=>"btn btn-default btn-xs",
			'data'=>['confirm'=>'Apakah kamu yakin ingin mengapus data ini','method'=>'post',],    
			'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
		];
		$icon1 = '
			<span class="fa-stack fa-xs">																	
				<i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
				<i class="fa fa-trash fa-stack-1x" style="color:black"></i>
			</span>
		';      
		$label1 = $icon1 . '  ' . $title1;
		$content = Html::button($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
	/*
	 * BUTTON CREATE
	*/
	function tombolCreateReport(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/basic/jurnal-template-report/create']);
		$options1 = ['value'=>$url,
					'id'=>'jurnal-template-report-button-create',
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
	function tombolViewReport($url, $model){
		$title1 = Yii::t('app',' View');
		$options1 = [
			'value'=>url::to(['/basic/jurnal-template-report/view','id'=>$model['RPT_GROUP__ID']]),
			'id'=>'jurnal-template-report-button-view',
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
	function tombolUpdateReport($url, $model){
		$title1 = Yii::t('app',' Edit');
		$options1 = [
			'value'=>url::to(['/basic/jurnal-template-report/update','id'=>$model['RPT_GROUP__ID']]),
			'id'=>'jurnal-template-report-button-update',
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
	 * BUTTON Hapus
	*/
	function tombolDeleteReport($url, $model){
		$title1 = Yii::t('app',' Hapus');
		$options1 = [
			'href'=>url::to(['/basic/jurnal-template-report/delete','id'=>$model['RPT_GROUP__ID']]),
			'class'=>"btn btn-default btn-xs",
			'data'=>['confirm'=>'Apakah kamu yakin ingin mengapus data ini','method'=>'post',],    
			'style'=>['text-align'=>'left','width'=>'100%', 'height'=>'25px','border'=> 'none'],
		];
		$icon1 = '
			<span class="fa-stack fa-xs">																	
				<i class="fa fa-circle-thin fa-stack-2x " style="color:#FF5F00"></i>
				<i class="fa fa-trash fa-stack-1x" style="color:black"></i>
			</span>
		';      
		$label1 = $icon1 . '  ' . $title1;
		$content = Html::button($label1,$options1);		
		return '<li>'.$content.'</li>';
	}
	
	function tombolKembali(){
		$title= Yii::t('app','');
		$url = Url::toRoute(['/basic/container-jurnal']);
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