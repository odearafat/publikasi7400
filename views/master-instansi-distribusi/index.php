<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Instansi Distribusis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-instansi-distribusi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Instansi Distribusi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_instansi',
            'nama_instansi',
            'alamat_instansi:ntext',
            'internal_or_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
