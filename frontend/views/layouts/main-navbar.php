<?php
use yii\helpers\Html;
use kartik\nav\NavX;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use kartik\icons\Icon;
use mdm\admin\components\MenuHelper;

dmstr\web\AdminLteAsset::register($this);
?>
 <header class="main-header"> <!-- navbar-fixed-top !-->
	<a  class="logo" style="background-color:#02a3c1">
		<?php
			echo Html::img(Yii::$app->request->baseUrl.'/logo-dashboard3.png', ['width'=>'150px','height'=>'50px']);
		?>
		
	</a>
	   <!--  <div class="navbar-custom-menu">!-->
		<?php
			// echo  \yii\helpers\Json::encode($menuItems);
			if (!Yii::$app->user->isGuest) {
				// $menuItems  = MenuHelper::getAssignedMenu(Yii::$app->user->id);
				$menuItems = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback);
				$menuItems[] = [
					'label' => Icon::show('power-off') ,//. 'Logout',// (' . Yii::$app->user->identity->username . ')',
					//'label' => Icon::showStack('twitter', 'square-o', ['class'=>'fa-lg']) . 'Logout (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
				];

				NavBar::begin([
					//'brandLabel' => 'LukisonGroup',
					//'brandUrl' => Yii::$app->homeUrl,
					//-ptr.nov-
					'brandLabel' => '<!-- Sidebar toggle button-->
									<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
										<span class="sr-only">Toggle Navigation</span>
									</a>',
					'options' => [
						//'class' => 'navbar-inverse navbar-fixed-top',
					   'class' => [
						   'navbar navbar-inverse navbar-static-top',
						   //'navbar navbar-inverse navbar-fixed-top',
						   'style'=>'background-color:#313131'
					   ],
						//'class' => 'navbar-inverse navbar-static-top',
					   // 'class' => 'navbar-inverse navbar',
						// 'class' => 'navbar navbar-fixed-top',
						'role'=>'button',
						'style'=>'margin-bottom: 0',
					],
				]);

				echo NavX::widget([
					'options' => ['class' => 'navbar-nav  navbar-left'],
					'items' => $menuItems,
					'activateParents' => true,
					'encodeLabels' => false,
				]);

				NavBar::end();
			};
		?>
	   <!-- </div>!-->

</header>