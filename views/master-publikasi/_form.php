<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\MasterPegawai;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-publikasi-form">




    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'id_publikasi')->textInput() ?>

    <?= $form->field($model, 'nama_publikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_upload')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Upload....'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
        ]);
    ?>

    <?= $form->field($model, 'tgl_periksa_bidang')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Upload ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
        ]);
    ?>

    <?= $form->field($model, 'tgl_periksa_ipds')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Diserahkan ke IPDS...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
        ]);
    ?>

    <?= $form->field($model, 'tgl_rilis')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Rilis Pubikasi ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
        ]);
    ?>

    <?= $form->field($model, 'id_penyusun')->dropDownList(
          ArrayHelper::map(MasterPegawai::find()->all(),'niplama','nama'),
            ['prompt'=>'Pilih User']) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
