<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangkeluarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangkeluars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangkeluar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'nama_barang',
            'tanggal_keluar',
            'jumlah',
            'harga_barang',
            'total_harga',
            'id_barang',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>
</div>
