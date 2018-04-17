<?php
use yii\helpers\Html;
use yii\web\View;
use kartik\widgets\Growl;
$this->title="Store Controller";
use yii\widgets\Breadcrumbs;	
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
$this->registerJs($this->render('container_script.js'),View::POS_READY);
echo $this->render('container_button'); //echo difinition
echo $this->render('container_modal'); //echo difinition
?>

<?php if (Yii::$app->session->hasFlash('error')) {
			echo Growl::widget([
                'type' => Growl::TYPE_DANGER,
                'title' => 'Oh snap!',
                'icon' => 'glyphicon glyphicon-remove-sign',
				'body' => Yii::$app->session->getFlash('error'),
				'showSeparator' => true,
                'delay' => 500,
                'pluginOptions' => [
                    'showProgressbar' => true,
                    'placement' => [
                        'from' => 'top',
                        'align' => 'right',
                    ]
                ]
			]);
		}?>
<div class="container-fluid" style="font-family: verdana, arial, sans-serif ;font-size: 8pt">
<?=$vewBreadcrumb?>
<section class="content-header">
    <h1>
    Store<small>Controller</small>
    </h1>
</section>
	<div class="col-xs-12 col-sm-12 col-lg-12" style="font-family: tahoma ;font-size: 9pt;">
	<div class="col-md-6">
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Member Konsumer</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <!-- <?php// Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/end-user']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?> -->
            <?= tombolMemberkonsumer()?>
        </div>     
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Store Kasir</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <!-- <?php// Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-kasir']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?> -->
            <?= tombolstorekasir()?>
        </div>   
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Store Membership</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <!-- <?php// Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?> -->
            <?= tombolstoremembership() ?>
        </div>
    </div>      
    <div class="col-md-6">
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Membership Paket</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <!-- <?php// Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership-paket']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?> -->
            <?= tombolmembershippaket()?>
        </div>
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Membership Pakage</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <!-- <?php// Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership-pakage']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?> -->
            <?= tombolmembershippakage()?>
        </div>        
        <div class="w3-card-2 w3-round w3-white w3-left col-md-12" style="margin-bottom:15px">
            <h3>Transaksi Dompet</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora totam assumenda ipsam praesentium exercitationem aliquam eligendi explicabo eos. Odit odio non sequi porro unde soluta eos placeat fugit ut temporibus.</p>
            <!-- <?php// Html::button('Detail',['onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/account/store-membership-pakage']) . "';",'id'=>'jurnal-button-akun','data-pjax' => false,'class'=>"btn bg-purple btn-flat margin",'title'=>'Detail']);?> -->
            <?= tombolAccountDompet()?>
        </div>        
    </div>   
	</div>
</div>