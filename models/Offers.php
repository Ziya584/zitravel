<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property double $price
 */
class Offers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'price'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'price' => Yii::t('app', 'Price'),
        ];
    }

	public static function getAll()
	{
		$data = self::find()->all();
		return $data;
	}
}
