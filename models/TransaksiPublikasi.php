<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_publikasi".
 *
 * @property int $id_transaksi
 * @property int $jenis_transaksi
 * @property string $file_address
 * @property string $catatan
 * @property string $niplama
 * @property int $id_publikasi
 * @property string $time_transaksi
 *
 * @property MasterPublikasi $publikasi
 */
class TransaksiPublikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_publikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['id_transaksi', 'jenis_transaksi', 'file_address', 'catatan', 'niplama', 'id_publikasi'], 'required'],
            [['id_transaksi', 'jenis_transaksi', 'id_publikasi'], 'integer'],
            [['catatan'], 'string'],
            //[['time_transaksi'], 'safe'],
            //[['file_address'], 'string', 'max' => 300],
            //[['niplama'], 'string', 'max' => 9],
            //[['id_transaksi'], 'unique'],
            //[['id_publikasi'], 'exist', 'skipOnError' => true, 'targetClass' => MasterPublikasi::className(), 'targetAttribute' => ['id_publikasi' => 'id_publikasi']],

            //Tambahan
            [['file_address'], 'file', 'skipOnEmpty' => true, 'extensions' => 'zip, rar'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
          //  'id_transaksi' => 'Id Transaksi',
          //  'jenis_transaksi' => 'Jenis Transaksi',
            'file_address' => 'Upload File',
          //  'catatan' => 'Catatan',
          //  'niplama' => 'Niplama',
          //  'id_publikasi' => 'Id Publikasi',
          //  'time_transaksi' => 'Time Transaksi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublikasi()
    {
        return $this->hasOne(MasterPublikasi::className(), ['id_publikasi' => 'id_publikasi']);
    }
}
