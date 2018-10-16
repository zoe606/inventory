<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangmasukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangmasuk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'tanggal_masuk') ?>

    <?= $form->field($model, 'jumlah_barang') ?>

    <?php // echo $form->field($model, 'harga_beli') ?>

    <?php // echo $form->field($model, 'total_harga') ?>

    <?php // echo $form->field($model, 'type_barang') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'supplier_id_') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
