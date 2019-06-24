<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasiNonARC */

$this->title = 'Create Master Publikasi Non Arc';
$this->params['breadcrumbs'][] = ['label' => 'Master Publikasi Non Arcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-publikasi-non-arc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
