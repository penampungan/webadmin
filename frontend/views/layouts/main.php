<?php
use yii\helpers\Html;
use kartik\nav\NavX;
use yii\bootstrap\NavBar;
use kartik\icons\Icon;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\assets\AppAsset;
AppAsset::register($this);


$callback = function($menu){
				$data1=($menu['data']);
				$data2=str_replace("'",'',$data1);
				$data3=str_replace(";",'',$data2);	
                $data1=$menu['data'];
				$data = eval($menu['data']);
                //echo $data;
				return [
					'label' => Icon::show($data3).$menu['name'],
					'url' => [$menu['route']],
					//'options' => $data1,
					'items' => $menu['children']
				];
			};
			
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
		<head>
			<meta charset="<?= Yii::$app->charset ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<?= Html::csrfMetaTags() ?>
			<title><?= Html::encode($this->title) ?></title>
			<?php $this->head() ?>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		</head>
		<!-- 
			Default collapse ~ptr.nov~ 
			skin-blue sidebar-mini sidebar-collapse
		!-->
		<!--<body class="skin-blue sidebar-collapse" style="min-height:680px"> 	!-->	
		<body class="hold-transition skin-red " style="min-height:80px"> 		
			<! - NOT LOGIN- Author : -ptr.nov- >
			<?php if (Yii::$app->user->isGuest) { ?>
				<?php $this->beginBody(['id'=>'page-top','class'=>'index']) ?>
					<div class="wrap"  style="background-color:powderblue;">
						<!-- NAV BAR !-->
						<?php //=$this->render('main-navbarNologin')?>
						<!-- BODY CONTAINER !-->
						<div style="padding-top:20px;background-color:powderblue;">
							<?= $content ?>
						</div>
					</div>
					<!-- FOOTER !-->
					<?=$this->render('main-footer_noLogin')?>
				<?php $this->endBody() ?>
			<?php }; ?>
			<! -LOGIN- Author : -ptr.nov- >
			<?php if (!Yii::$app->user->isGuest) { ?>
				<?php $this->beginBody(['id'=>'page-top','class'=>'index']) ?>
					<div class="wrap">
						<!-- TOP NAV BAR !-->
						<?=$this->render('main-navbar',['callback'=>$callback])?>
						<!-- LEFT MENU !-->
						<aside class="main-sidebar " style="min-height:680px">						
						<?=$this->render('mainLeft'); ?>
						</aside>
						<!-- BODY CONTAINER !-->	
						<?=$this->render('mainContent',['content'=>$content]); ?>	
						<!-- FOOTER !-->
						<?php //=$this->render('main-footer')?>						
					</div>
					
				<?php $this->endBody() ?>
			<?php }; ?>
		</body>
	</html>
<?php $this->endPage() ?>
