<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Barangkeluar */

$this->title = 'Create Barangkeluar';
$this->params['breadcrumbs'][] = ['label' => 'Barangkeluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangkeluar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
