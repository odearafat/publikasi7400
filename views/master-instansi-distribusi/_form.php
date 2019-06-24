<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterInstansiDistribusi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-instansi-distribusi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_instansi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'internal_or_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
