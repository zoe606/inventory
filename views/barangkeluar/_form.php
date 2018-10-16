<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barangkeluar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangkeluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal_keluar')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'harga_barang')->textInput() ?>

    <?= $form->field($model, 'total_harga')->textInput() ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
