<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\MasterPublikasi;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Cetak';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-cetak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Cetak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_cetak',
            [
              'attribute' => 'id_publikasi',
              'value' => function($model){
                  $city_name = MasterPublikasi::find()->select(['nama_publikasi'])->where(['id_publikasi' => $model->id_publikasi])->one();
                  return $city_name ? $city_name->nama_publikasi:'None';
              },
          ],
            //'id_publikasi',
            'file_publikasi',
            'file_cover',
            'keterangan_cetak',
            //'id_uploader',
            //'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
