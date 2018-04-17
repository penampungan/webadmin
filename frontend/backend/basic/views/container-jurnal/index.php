<?php
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;	

$this->title="Jurnal Controller";
	$this->params['breadcrumbs'][] = $this->title;
	$vewBreadcrumb=Breadcrumbs::widget([
		'homeLink' => [
			'label' => Html::encode(Yii::t('yii', 'Home')),
			'url' => Yii::$app->homeUrl,
		],
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]);	
use frontend\assets\AppAssetBackendBorder;
AppAssetBackendBorder::register($this);
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
<?=$vewBreadcrumb?>
<section class="content-header">
    <h1>
    Jurnal<small>Controller</small>
    </h1>
</section>
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
    <div class="row">
	<div class="col-md-6">
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Jurnal</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/basic/jurnal-akun']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Jurnal Status</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/basic/jurnal-status']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
    </div>      
    <div class="col-md-6">
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Jurnal Template</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/basic/jurnal-template-title']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
    </div>   
	</div>
</div>
</div>