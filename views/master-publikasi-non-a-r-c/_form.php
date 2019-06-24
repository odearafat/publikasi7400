<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasiNonARC */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-publikasi-non-arc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_publikasi')->textInput() ?>

    <?= $form->field($model, 'nama_publikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_rilis')->textInput() ?>

    <?= $form->field($model, 'file_cover')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_pdf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_cetak')->textInput() ?>

    <?= $form->field($model, 'status_distribusi')->textInput() ?>

    <?= $form->field($model, 'di_bidang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_penyusun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_editor_penyusun')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
