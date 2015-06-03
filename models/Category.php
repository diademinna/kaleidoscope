<?php

namespace app\models;

use app\modules\admin\components\CImageHandler;
use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $number
 * @property string $description
 * @property string $image
 * @property integer $active
 * @property integer $pos
 * @property integer $category_id
 *
 * @property Category $parent
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
            [['name', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Название',
            'number' => 'Количество товаров',
            'description' => 'Описание',
            'image' => 'Изображение',
            'active' => 'На сайте',
            'pos' => 'Позиция',
            'category_id' => 'Родитель'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
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
        foreach ($this->categories as $category) {
            $category->delete();
        }

        return parent::beforeDelete();
    }

    public function getImagePath()
    {
        return Yii::$app->basePath . '/web/upload/category/' . $this->id . '.jpg';
    }

    public function getImageUrl()
    {
        return '/upload/category/' . $this->id . '.jpg';
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $file = UploadedFile::getInstance($this, 'image');
        if ($file !== null) {
            $file->saveAs($this->getImagePath());

            $image = new CImageHandler();
            $image->load($this->getImagePath());
            $image->resize(300, 200);
            $image->save();
        }
    }
}
