<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeBarang */

$this->title = 'Update Type Barang: ' . $model->type_barang;
$this->params['breadcrumbs'][] = ['label' => 'Type Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_barang, 'url' => ['view', 'id' => $model->type_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
