<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
    <div class="col-xs-5">
    <?php  echo $form->field($model, 'min_price') ?>
    </div>
    <div class="col-xs-1">
        <p>$</p>
    </div>
    <div class="col-xs-5">
    <?php  echo $form->field($model, 'max_price') ?>
    </div>
    <div class="col-xs-1">
        <p>$</p>
    </div>
    <div class="clear"></div>
    <div class="col-xs-12">
    <div id="slider_price"></div>
    </div>
    <div class="col-xs-5">
        <?php  echo $form->field($model, 'min_length') ?>
    </div>
    <div class="col-xs-1">
        <p>см</p>
    </div>
    <div class="col-xs-5">
        <?php  echo $form->field($model, 'max_length') ?>
    </div>
    <div class="col-xs-1">
        <p>см</p>
    </div>
    <div class="clear"></div>
    <div class="col-xs-12">
        <div id="slider_length"></div>
    </div>
    <div class="col-xs-5">
        <?php  echo $form->field($model, 'min_width') ?>
    </div>
    <div class="col-xs-1">
        <p>см</p>
    </div>
    <div class="col-xs-5">
        <?php  echo $form->field($model, 'max_width') ?>
    </div>
    <div class="col-xs-1">
        <p>см</p>
    </div>
    <div class="clear"></div>
    <div class="col-xs-12">
        <div id="slider_width"></div>
    </div>
    <?php  echo $form->field($model, 'country')
        ->checkboxList(ArrayHelper::map(\common\models\Product::find()
            ->all(), 'country', 'country')); ?>
    <?php echo $form->field($model, 'manufacturer')
        ->checkboxList(ArrayHelper::map(\common\models\Product::find()
            ->all(), 'manufacturer', 'manufacturer'));?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
