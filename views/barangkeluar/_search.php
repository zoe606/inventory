<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangkeluarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangkeluar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    

    <?= $form->field($model, 'tanggal_keluar') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'harga_barang') ?>

    <?php // echo $form->field($model, 'total_harga') ?>

    <?php // echo $form->field($model, 'id_barang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
