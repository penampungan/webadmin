<?php
use yii\helpers\Html;
use yii\web\View;
$this->title="Store Controller";
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
<section class="content-header">
    <h1>
    Store<small>Controller</small>
    </h1>
</section>
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
	<div class="col-md-6">
        <div class="col-md-12">
            <h3>Member Konsumer</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/end-user']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Membership Pakage</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership-pakage']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Store Membership</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
    </div>      
    <div class="col-md-6">
        <div class="col-md-12">
            <h3>Membership Paket</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership-paket']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Store Kasir</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-kasir']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        
    </div>   
	</div>
</div>