<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterInstansiDistribusi */

$this->title = 'Create Master Instansi Distribusi';
$this->params['breadcrumbs'][] = ['label' => 'Master Instansi Distribusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-instansi-distribusi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
