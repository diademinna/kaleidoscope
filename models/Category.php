<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $number
 * @property string $description
 * @property string $ext
 * @property integer $active
 * @property integer $pos
 * @property integer $category_id
 *
 * @property Category $category
 * @property Category[] $categories
 * @property GroupParam[] $groupParams
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'active', 'pos', 'category_id'], 'integer'],
            [['description'], 'string'],
            [['name', 'ext'], 'string', 'max' => 255]
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
            'number' => 'Number',
            'description' => 'Description',
            'ext' => 'Ext',
            'active' => 'Active',
            'pos' => 'Pos',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupParams()
    {
        return $this->hasMany(GroupParam::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function beforeDelete()
    {
        foreach ($this->products as $product) {
            $product->delete();
        }
    }
}
