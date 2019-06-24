<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterCetak */

$this->title = 'Update Master Cetak: ' . $model->id_cetak;
$this->params['breadcrumbs'][] = ['label' => 'Master Cetaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cetak, 'url' => ['view', 'id' => $model->id_cetak]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-cetak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
