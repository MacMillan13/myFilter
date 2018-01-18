<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <div class="row">
        <div class="col-xs-4">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
        <div class="col-xs-8">
<?
echo $sort->link('price') . ' | ' . $sort->link('title');

?>
            <h1><?= Html::encode($this->title) ?></h1>
            <?php Pjax::begin(); ?>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => 'post',
                'emptyText' => 'Список пуст'
            ]) ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
