<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiPublikasi */

$this->title = 'Create Transaksi Publikasi';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Publikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-publikasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
