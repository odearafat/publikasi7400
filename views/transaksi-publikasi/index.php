<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Publikasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-publikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Publikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_transaksi',
            'jenis_transaksi',
            'file_address',
            'catatan:ntext',
            'niplama',
            //'id_publikasi',
            //'time_transaksi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
