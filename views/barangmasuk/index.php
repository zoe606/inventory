<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangmasukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangmasuks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangmasuk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barangmasuk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            #'id',
            'idBarang.nama',
            #'nama_barang',
            'tanggal_masuk',
            'jumlah_barang',
            'harga_beli',
            'total_harga',
            'type_barang',
            #'user_id',
            'supplier_id_',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>
</div>
