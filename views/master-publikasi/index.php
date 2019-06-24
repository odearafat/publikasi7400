<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\grid\DataColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publikasi ARC';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-publikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //Html::a('Create Master Publikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

          //  'id_publikasi',
            'nama_publikasi',
            [
                'attribute' => 'tgl_upload',
                'format'         => ['date', 'php:j F Y '],
                'headerOptions' => ['style' => 'text-align: center;'],
                'contentOptions' => ['style' => 'text-align: right;'],
            ],
            [
                'attribute' => 'tgl_rilis',
                'format'         => ['date', 'php:j F Y '],
                'headerOptions' => ['style' => 'text-align: center;'],
                'contentOptions' => ['style' => 'text-align: right;'],
            ],
            [
                'attribute' => 'tgl_periksa_bidang',
                'format'         => ['date', 'php:j F Y '],
                'headerOptions' => ['style' => 'text-align: center;'],
                'contentOptions' => ['style' => 'text-align: right;'],
            ],
            [
                'attribute' => 'tgl_periksa_ipds',
                'format'         => ['date', 'php:j F Y '],
                'headerOptions' => ['style' => 'text-align: center;'],
                'contentOptions' => ['style' => 'text-align: right;'],
            ],
            [
                'attribute' => 'penyusun.nama',
                'format'         => 'text',
                'headerOptions' => ['style' => 'text-align: center;'],
                'contentOptions' => ['style' => 'text-align: center;'],
            ],
            /*'tgl_upload',
            'tgl_rilis',
            'tgl_periksa_bidang',
            'tgl_periksa_ipds',*/
            //'penyusun.nama',
            //'tahun',

           //['class' => 'yii\grid\ActionColumn'],
            [
              'class' => 'yii\grid\ActionColumn',
              //'template' => '{view} {update} {delete} {link} {histori}',
              'template' => '
                    <div class="btn-group">
                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li>{view}</li>
                      <li class="divider"></li>
                      <li>{update}</li>
                      <li class="divider"></li>
                      <li>{delete}</li>
                      <li class="divider"></li>
                      <li>{link}</li>
                      <li class="divider"></li>
                      <li>{histori}</li>

                    </ul>
                  </div>'
               ,
              'buttons' => [

                'view' => function ($url,$model,$key) {
                  $a=Url::to(['master-publikasi/view', 'id'=>$model->id_publikasi]);
                  return Html::a(      'View',
                           $a);
                },

                'update' => function ($url,$model,$key) {
                  $a=Url::to(['master-publikasi/update', 'id'=>$model->id_publikasi]);
                  return Html::a('Update',$a);
                },
                'delete' => function ($url,$model,$key) {
                    $a=Url::to(['master-publikasi/delete', 'id'=>$model->id_publikasi]);
                    return Html::a(
                             'Delete',
                             $a);
                  },
                  'link' => function ($url,$model,$key) {
                      $a=Url::to(['transaksi-publikasi/create', 'id'=>$model->id_publikasi]);
                      return Html::a(
                               'Upload Publikasi',
                               $a);
                    },

                  'histori' => function ($url,$model,$key) {
                    $a=Url::to(['master-publikasi/histori', 'id'=>$model->id_publikasi]);
                    return Html::a('Timeline',$a);
                  },

	        ],
        ],

        ],
    ]); ?>


</div>
