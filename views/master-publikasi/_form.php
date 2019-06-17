<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasi */
/* @var $form yii\widgets\ActiveForm */
?>





<div class="master-publikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_publikasi')->textInput() ?>

    <?= $form->field($model, 'nama_publikasi')->textInput(['maxlength' => true]) ?>


    <?=
    ////https://github.com/2amigos/yii2-date-picker-widget

    DatePicker::widget([
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
    ]);?>


    <?= $form->field($model, 'tgl_upload')
    //->textInput(
        //['class' => 'datepicker'],
      //  ['data-provide'=>'datepicker'],
    //    ['format'=>'mm/dd/yyyy']
    //    )
    ->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => true,
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);
    ?>


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
