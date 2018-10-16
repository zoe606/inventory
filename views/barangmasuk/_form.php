<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Barang;
use app\models\Supplier;
use app\models\TypeBarang;

/* @var $this yii\web\View */
/* @var $model app\models\Barangmasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangmasuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'id_barang')->label('ID Barang')
        ->dropDownList(ArrayHelper::map(Barang::find()->asArray()->all(),'id','nama'),['prompt'=>'- Pilih -'])
        ->hint('Pilih Barang'); ?>

    <?php echo $form->field($model, 'type_barang')->label('Type Barang')
        ->dropDownList(ArrayHelper::map(TypeBarang::find()->asArray()->all(),'type_barang','nama_barang'),['prompt'=>'- Pilih -'])
        ->hint('Pilih Barang'); ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>

    <?= $form->field($model, 'harga_beli')->textInput() ?>

    <?php echo $form->field($model, 'supplier_id_')->label('Supplier')
        ->dropDownList(ArrayHelper::map(Supplier::find()->asArray()->all(),'id_spl','nama_spl'),['prompt'=>'- Pilih -'])
        ->hint('Pilih Supplier'); ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
