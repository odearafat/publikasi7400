<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\MasterPublikasi;

/* @var $this yii\web\View */
/* @var $model app\models\MasterCetak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-cetak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_publikasi')->dropDownList(
          ArrayHelper::map(masterPublikasi::find()->all(),'id_publikasi','nama_publikasi'),
            ['prompt'=>'Pilih Publikasi']); ?>

    <?= $form->field($model, 'keterangan_cetak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_publikasi')->fileInput() ?>
    <?= $form->field($model, 'file_cover')->fileInput() ?>
    <?php //$form->field($model, 'file_publikasi')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'file_cover')->textInput(['maxlength' => true]) ?>



    <?php //$form->field($model, 'id_uploader')->textInput(['maxlength' => true]) ?>

    <?php $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
