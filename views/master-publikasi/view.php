<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasi */

$this->title = $model->nama_publikasi;
$this->params['breadcrumbs'][] = ['label' => 'Master Publikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-publikasi-view">

    <h1><?php //Html::encode($this->title) ?></h1>

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
        //'nama_pegawai'=>$nama_pegawai,
        'attributes' => [
          //  'id_publikasi',
            'nama_publikasi',
            'tgl_upload',
            'tgl_rilis',
            'tgl_periksa_bidang',
            'tgl_periksa_ipds',
            'id_penyusun',
            'tahun',
        ],
    ]) ?>

</div>
