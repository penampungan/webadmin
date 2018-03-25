<?php
use yii\helpers\Html;
use yii\web\View;
$this->title="PPOB Controller";
?>

<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
<section class="content-header">
    <h1>
    PPOB<small>Controller</small>
    </h1>
</section>
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
	<div class="col-md-6">
        <div class="col-md-12">
            <h3>Master PPOB</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-header']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Data Pakage</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-detail']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Transaksi Penjualan</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-transaksi']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Master Data PPOB</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-master-data']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
    </div>      
    <div class="col-md-6">
        <div class="col-md-12">
            <h3>Master Harga</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-master-harga']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>
        <div class="col-md-12">
            <h3>Member Saldo</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-saldo-utama']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>                
        <div class="col-md-12">
            <h3>Transaksi Deposit</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-transaksi-saldo']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>                
        <div class="col-md-12">
            <h3>Kategori</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <?= Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/ppob/ppob-master-ktg']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?>
        </div>                
    </div>   
	</div>
</div>