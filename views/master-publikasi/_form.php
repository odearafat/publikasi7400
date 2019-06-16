<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-publikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_publikasi')->textInput() ?>

    <?= $form->field($model, 'nama_publikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_upload')->textInput() ?>

    <?= $form->field($model, 'tgl_rilis')->textInput() ?>

    <?= $form->field($model, 'tgl_periksa_bidang')->textInput() ?>

    <?= $form->field($model, 'tgl_periksa_ipds')->textInput() ?>

    <?= $form->field($model, 'id_penyusun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
