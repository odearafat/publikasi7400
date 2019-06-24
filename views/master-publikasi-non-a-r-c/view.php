<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasiNonARC */

$this->title = $model->id_publikasi;
$this->params['breadcrumbs'][] = ['label' => 'Master Publikasi Non Arcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-publikasi-non-arc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_publikasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_publikasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_publikasi',
            'nama_publikasi',
            'tgl_rilis',
            'file_cover',
            'file_pdf',
            'status_cetak',
            'status_distribusi',
            'di_bidang',
            'id_penyusun',
            'id_editor_penyusun',
        ],
    ]) ?>

</div>
