<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'emptyText' => 'Пусто',
        'summary' => 'Всего {count} записей',
        'columns' => [
            'id',
            'name',
            'number',
            'description',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function (\app\models\Category $model, $key, $index, $column) {
                    return Html::img($model->getImageUrl(),[
                        'style' => ''
                    ]);
                }
            ],
            'active',
            'pos',
            'category_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
