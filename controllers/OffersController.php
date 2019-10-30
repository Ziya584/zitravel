<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\Offers;

class OffersController extends Controller
{
	public function actionIndex()
	{
		$model = new Offers;
		$offers = $model->getAll();
//		$offers=[
//			0=>['id'=>1,'title'=>'test','description'=>'this is test offer for view','price'=>'1.5']
//		];
		return $this->render('index',['offers'=>$offers]);
	}

	public function actionOffer()
	{
		$model = new Offers;
//		$offers = $model->getAll();

		return $this->render('offer',['model'=>$model]);
	}

}
