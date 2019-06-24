<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiDownload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-download-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_download_transaksi')->textInput() ?>

    <?= $form->field($model, 'tanggal_download')->textInput() ?>

    <?= $form->field($model, 'niplama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_transaksi_publikasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
