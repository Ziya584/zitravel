<?php
	/**
	 * Created by PhpStorm.
	 * User: Ziya
	 * Date: 27.10.2019
	 * Time: 17:08
	 */

	use yii\helpers\Html;

	$this->title = 'Офферы';

	$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offers">
<!--	<h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<div class="row">
	<?php foreach ($offers as $offer): ?>
	<div class="col-3">
		<div class="row"><div class="col-12"><h2><?php echo $offer['title'] ?></h2></div></div>
		<div class="row"><div class="col-12"><h3><?php echo $offer['description'] ?></h3></div></div>
		<div class="row"><div class="col-12"><h2><?php echo $offer['price'] ?></h2></div></div>
	</div>
	<?php endforeach ?>

</div>


</div>