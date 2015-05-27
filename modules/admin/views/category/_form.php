<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'active')->checkbox(['bool' => true]) ?>

    <?= $form->field($model, 'pos')->input('number') ?>

    <?php
    $condition = [];
    if (!$model->isNewRecord) {
        $condition = ['<>', 'id', $model->id];
    }

    $parents = \app\models\Category::find()->where($condition)->all();
    $parents = \yii\helpers\ArrayHelper::map($parents, 'id', 'name');
    ?>

    <?= $form->field($model, 'category_id')->dropDownList($parents); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
