<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_download".
 *
 * @property int $id_download_transaksi
 * @property string $tanggal_download
 * @property string $niplama
 * @property int $id_transaksi_publikasi
 *
 * @property TransaksiPublikasi $transaksiPublikasi
 */
class TransaksiDownload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_download';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_download_transaksi', 'tanggal_download', 'niplama', 'id_transaksi_publikasi'], 'required'],
            [['id_download_transaksi', 'id_transaksi_publikasi'], 'integer'],
            [['tanggal_download'], 'safe'],
            [['niplama'], 'string', 'max' => 9],
            [['id_transaksi_publikasi'], 'exist', 'skipOnError' => true, 'targetClass' => TransaksiPublikasi::className(), 'targetAttribute' => ['id_transaksi_publikasi' => 'id_transaksi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_download_transaksi' => 'Id Download Transaksi',
            'tanggal_download' => 'Tanggal Download',
            'niplama' => 'Niplama',
            'id_transaksi_publikasi' => 'Id Transaksi Publikasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiPublikasi()
    {
        return $this->hasOne(TransaksiPublikasi::className(), ['id_transaksi' => 'id_transaksi_publikasi']);
    }
}
