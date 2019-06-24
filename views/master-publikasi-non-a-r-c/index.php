<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Publikasi Non Arcs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-publikasi-non-arc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Publikasi Non Arc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_publikasi',
            'nama_publikasi',
            'tgl_rilis',
            'file_cover',
            'file_pdf',
            //'status_cetak',
            //'status_distribusi',
            //'di_bidang',
            //'id_penyusun',
            //'id_editor_penyusun',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
