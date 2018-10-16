<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barangkeluar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barangkeluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangkeluar-view">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            #'nama_barang',
            'tanggal_keluar',
            'jumlah',
            'harga_barang',
            'total_harga',
            'id_barang',
        ],
    ]) ?>

</div>
