<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TypeBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Type Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Type Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type_barang',
            'nama_barang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
