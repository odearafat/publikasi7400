<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterCetak */

$this->title = 'Create Master Cetak';
$this->params['breadcrumbs'][] = ['label' => 'Master Cetaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-cetak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
