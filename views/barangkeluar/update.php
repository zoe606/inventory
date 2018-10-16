<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Barangkeluar */

$this->title = 'Update Barangkeluar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barangkeluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangkeluar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
