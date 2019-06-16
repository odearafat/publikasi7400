<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiPublikasi */

$this->title = 'Update Transaksi Publikasi: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Publikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-publikasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
