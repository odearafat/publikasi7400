<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiPublikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-publikasi-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?php //$form->field($model, 'id_transaksi')->textInput() ?>

    <?php //$form->field($model, 'jenis_transaksi')->textInput() ?>

    <?= $form->field($model, 'file_address')->fileInput() ?>

    <?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>

    <?php  echo Html::hiddenInput('id_publikasi', '1');

    //$form->field($model, 'niplama')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'id_publikasi')->textInput() ?>

    <?php //$form->field($model, 'time_transaksi')->textInput() ?>

  <!-- <button>Submit</button>-->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
