<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasiNonARC */

$this->title = 'Update Master Publikasi Non Arc: ' . $model->id_publikasi;
$this->params['breadcrumbs'][] = ['label' => 'Master Publikasi Non Arcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_publikasi, 'url' => ['view', 'id' => $model->id_publikasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-publikasi-non-arc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
