<?php

	/* @var $this \yii\web\View */
	/* @var $content string */

	use backend\assets\AppAsset;
	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use common\widgets\Alert;

	AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">

	<!-- Sidebar  -->
	<nav id="sidebar">

		<div class="sidebar-header">
			<h3>ZiTravel</h3>
			<strong>ZT</strong>
		</div>


		<ul class="list-unstyled components">
			<li class="active">
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="fas fa-home"></i>
					Home
				</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li>
						<a href="#">Home 1</a>
					</li>
					<li>
						<a href="#">Home 2</a>
					</li>
					<li>
						<a href="#">Home 3</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-briefcase"></i>
					About
				</a>
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="fas fa-copy"></i>
					Pages
				</a>
				<ul class="collapse list-unstyled" id="pageSubmenu">
					<li>
						<a href="#">Page 1</a>
					</li>
					<li>
						<a href="#">Page 2</a>
					</li>
					<li>
						<a href="#">Page 3</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-image"></i>
					Portfolio
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-question"></i>
					FAQ
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-paper-plane"></i>
					Contact
				</a>
			</li>
		</ul>

		<ul class="list-unstyled CTAs">
			<li>
				<a href="#" class="download">Download source</a>
			</li>
			<li>
				<a href="#" class="article">Back to article</a>
			</li>
		</ul>
	</nav>
	<nav class="nav navbar-left bg-light">
		<div class="container-fluid">

			<button type="button" id="sidebarCollapse" class="btn btn-info">
				<i class="fas fa-align-left"></i>
				<span></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav navbar-nav ml-auto">

				</ul>
			</div>
		</div>
	</nav>
	<!-- Page Content  -->
	<div id="content">

		<div class="container">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
