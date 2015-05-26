<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property integer $code
 * @property integer $price
 * @property integer $price_new
 * @property string $description
 * @property integer $latest
 * @property integer $active
 * @property integer $pos
 * @property integer $category_id
 *
 * @property ActionProduct[] $actionProducts
 * @property Photo[] $photos
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'price', 'price_new', 'latest', 'active', 'pos', 'category_id'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'price' => 'Price',
            'price_new' => 'Price New',
            'description' => 'Description',
            'latest' => 'Latest',
            'active' => 'Active',
            'pos' => 'Pos',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActionProducts()
    {
        return $this->hasMany(ActionProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
