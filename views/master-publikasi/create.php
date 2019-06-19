<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasi */

$this->title = 'Input Publikasi';
$this->params['breadcrumbs'][] = ['label' => 'Publikasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-publikasi-create">

    <h1><?php Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
