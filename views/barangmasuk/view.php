<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barangmasuk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barangmasuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangmasuk-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            #'id',
            #'id_barang',
            'idBarang.nama',
            #'nama_barang',
            'tanggal_masuk',
            'jumlah_barang',
            'harga_beli',
            'total_harga',
            'type_barang',
            'user_id',
            'supplier_id_',
        ],
    ]) ?>

</div>
