<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Publikasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-publikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Publikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

          //  'id_publikasi',
            'nama_publikasi',
            'tgl_upload',
            'tgl_rilis',
            'tgl_periksa_bidang',
            'tgl_periksa_ipds',
            'penyusun.nama',
            //'tahun',

           //['class' => 'yii\grid\ActionColumn'],

           [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {link}{histori}',
            'buttons' => [
                'link' => function ($url,$model,$key) {
                  $a=Url::to(['transaksi-publikasi/create', 'id'=>$model->id_publikasi]);
                  return Html::a(
                           '<span class="glyphicon glyphicon-upload"></span>',
                           $a);
                },
                'histori' => function ($url,$model,$key) {
                  $a=Url::to(['master-publikasi/histori', 'id'=>$model->id_publikasi]);
                  return Html::a(
                           '<i class="fa fa-history"></i>',
                           $a);
                },

	        ],
        ],

        ],
    ]); ?>


</div>
