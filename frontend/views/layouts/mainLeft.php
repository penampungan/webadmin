<?php
use yii\helpers\Html;
use kartik\sidenav\SideNav;
use yii\helpers\Url;

use common\models\User;
use common\models\UserloginSearch;
use frontend\assets\AppAsset;
AppAsset::register($this);
$base64 ='data:image/jpg;charset=utf-8;base64,'.Yii::$app->getUserOpt->user()['IMG64'];
//$corp=Yii::$app->getUserOpt->user()['CORP_NM']!=''?Yii::$app->getUserOpt->user()['CORP_NM']:'NAMA PERUSAHAAN';
$corp='ADMINISTRATOR KG';
$idController=Yii::$app->controller->id;
$sideMenu=SideNav::widget([
	'headingOptions' => ['style'=>Yii::$app->getTemplate->Template(Yii::$app->user->identity->TEMPLATE)['LifeMenu-Header']],
	'containerOptions'=>['style'=>Yii::$app->getTemplate->Template(Yii::$app->user->identity->TEMPLATE)['LifeMenu-Content']],
	//'type' => SideNav::TYPE_SUCCESS,
	'encodeLabels' => false,
	'heading' => '<b>'.$corp.'</b>',
	//'indItem'=>'',
	'items' =>[
		['label' => 'Home', 'icon' => 'home', 'url' => Url::to(['/dashboard']), 'active' => ($idController == 'home')],
        ['label' => 'Books', 'icon' => 'book', 'items' => [
            ['label' => '<span class="pull-right badge">10</span> Helper', 'url' => Url::to(['/site/new-arrivals']), 'active' => ($idController == 'new-arrivals')],
            ['label' => '<span class="pull-right badge">5</span> FAQ', 'url' => Url::to(['/site/most-popular']), 'active' => ($idController == 'most-popular')],
            ['label' => 'Read Online', 'icon' => 'cloud', 'items' => [
                ['label' => 'Online 1', 'url' => Url::to(['/site/online-1']), 'active' => ($idController == 'online-1')],
                ['label' => 'Online 2', 'url' => Url::to(['/site/online-2']), 'active' => ($idController == 'online-2')]
            ]],
        ]],
        ['label' => '<span class="pull-right badge">3</span> Categories', 'icon' => 'tags', 'items' => [
            ['label' => 'Fiction', 'url' => Url::to(['/site/fiction']), 'active' => ($idController == 'fiction')],
            ['label' => 'Historical', 'url' => Url::to(['/site/historical']), 'active' => ($idController == 'historical')],
            ['label' => '<span class="pull-right badge">2</span> Announcements', 'icon' => 'bullhorn', 'items' => [
                ['label' => 'Event 1', 'url' => Url::to(['/site/event-1']), 'active' => ($idController == 'event-1')],
                ['label' => 'Event 2', 'url' => Url::to(['/site/event-2']), 'active' => ($idController == 'event-2')]
            ]],
        ]],
        ['label' => 'Profile', 'icon' => 'user', 'url' => Url::to(['/site/profile']), 'active' => ($idController == 'profile')],
	
	]
]);
?>
	<section class="sidebar " >
		<!-- User Login -->
			<div class="user-panel" >
				<div class="pull-left" style="text-align: left,font-family: tahoma ;font-size: 9pt;">
					<img src="<?=$base64?>" class="img-circle" alt="Cinque Terre" width="80" height="80"/>
				</div>
				<div class="pull-left info" style="font-family: tahoma ;font-size: 9pt;margin-left: 30px;margin-top:15px" >
					<p><?=Yii::$app->getUserOpt->user()['PROFILE_NM']?></p>
				
					<a href="#"><i class="fa fa-circle text-success" style="text-align: left,font-family: tahoma ;font-size: 9pt;"> Setting</i> </a>
				</div>
			</div>
		 <?php
			//echo Yii::$app->getUserOpt->UserMenu();
			echo $sideMenu;;
		?>
	</section>
