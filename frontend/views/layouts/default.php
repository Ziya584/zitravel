<?php
	/**
	 * Created by PhpStorm.
	 * User: Ziya
	 * Date: 05.11.2019
	 * Time: 18:57
	 */

	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use frontend\assets\AppAsset;
	use common\widgets\Alert;

	AppAsset::register($this);
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->registerCsrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
	</head>
	<body>
	<?php $this->beginBody() ?>

	<div class="wrapper">
		<!-- Sidebar Holder -->

		<?php  ?>

		<nav id="sidebar">
			<div class="sidebar-header">
				<h3>ZiTravel</h3>
				<strong>ZT</strong>
			</div>

			<ul class="list-unstyled components">
				<li class="active">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
						<i class="glyphicon glyphicon-home"></i>
						Home
					</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li><a href="#">Home 1</a></li>
						<li><a href="#">Home 2</a></li>
						<li><a href="#">Home 3</a></li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-briefcase"></i>
						About
					</a>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
						<i class="glyphicon glyphicon-duplicate"></i>
						Pages
					</a>
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li><a href="#">Page 1</a></li>
						<li><a href="#">Page 2</a></li>
						<li><a href="#">Page 3</a></li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-link"></i>
						Portfolio
					</a>
				</li>
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-paperclip"></i>
						FAQ
					</a>
				</li>
				<li>
					<a href="#">
						<i class="glyphicon glyphicon-send"></i>
						Contact
					</a>
				</li>
			</ul>

			<!--		<ul class="list-unstyled CTAs">-->
			<!--			<li><a href="" class="download">Download source</a></li>-->
			<!--			<li><a href="" class="article">Back to article</a></li>-->
			<!--		</ul>-->
		</nav>

		<!-- Page Content Holder -->
		<div id="content">

			<nav class="navbar navbar-default">
				<div class="container-fluid">

					<div class="navbar-header ">
						<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
							<i class="glyphicon glyphicon-align-left"></i>
							<span></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="nav navbar-nav navbar-right">
							<?php

//								$menuItems = [
//									['label' => 'Home', 'url' => ['/site/index']],
//									['label' => 'About', 'url' => ['/site/about']],
//									['label' => 'Contact', 'url' => ['/site/contact']],
//								];
								if (Yii::$app->user->isGuest) {
									$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
									$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
								} else {
									$menuItems[] = '<li>'
										. Html::beginForm(['/site/logout'], 'post')
										. Html::submitButton(
											'Logout (' . Yii::$app->user->identity->username . ')',
											['class' => 'btn btn-link logout']
										)
										. Html::endForm()
										. '</li>';
								}
								echo Nav::widget([
									'options' => ['class' => 'navbar-nav navbar-right'],
									'items' => $menuItems,
								]);



							?>
						</div>
					</div>
			</nav>

			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>

	<?php $this->endBody() ?>
	</body>
	</html>
<?php $this->endPage() ?>