<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_cetak".
 *
 * @property int $id_cetak
 * @property int $id_publikasi
 * @property string $file_publikasi
 * @property string $file_cover
 * @property string $keterangan_cetak
 * @property string $id_uploader
 * @property string $date
 */
class MasterCetak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_cetak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_publikasi', 'file_cover', 'keterangan_cetak', 'id_uploader'], 'required'],
            [['id_publikasi'], 'integer'],
            [['date'], 'safe'],
            [['file_publikasi', 'file_cover', 'keterangan_cetak'], 'string', 'max' => 200],
            [['id_uploader'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cetak' => 'Id Cetak',
            'id_publikasi' => 'Nama Publikasi',
            //'file_publikasi' => 'File Publikasi',
            //'file_cover' => 'File Cover',
            'keterangan_cetak' => 'Keterangan Cetak',
            'id_uploader' => 'Id Uploader',
            'date' => 'Date',
            [['file_publikasi'], 'file', 'skipOnEmpty' => !$this->isNewRecord, 'extensions' => 'pdf'],
            [['file_cover'], 'file', 'skipOnEmpty' => !$this->isNewRecord, 'extensions' => 'pdf'],
        ];
    }
}
