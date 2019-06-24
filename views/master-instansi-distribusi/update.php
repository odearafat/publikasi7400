<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterInstansiDistribusi */

$this->title = 'Update Master Instansi Distribusi: ' . $model->id_instansi;
$this->params['breadcrumbs'][] = ['label' => 'Master Instansi Distribusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_instansi, 'url' => ['view', 'id' => $model->id_instansi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-instansi-distribusi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
