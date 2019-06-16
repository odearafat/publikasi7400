<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_publikasi".
 *
 * @property int $id_publikasi
 * @property string $nama_publikasi
 * @property string $tgl_upload
 * @property string $tgl_rilis
 * @property string $tgl_periksa_bidang
 * @property string $tgl_periksa_ipds
 * @property string $id_penyusun
 * @property int $tahun
 */
class MasterPublikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_publikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_publikasi', 'nama_publikasi', 'tgl_upload', 'tgl_rilis', 'tgl_periksa_bidang', 'tgl_periksa_ipds', 'id_penyusun', 'tahun'], 'required'],
            [['id_publikasi', 'tahun'], 'integer'],
            [['tgl_upload', 'tgl_rilis', 'tgl_periksa_bidang', 'tgl_periksa_ipds'], 'safe'],
            [['nama_publikasi'], 'string', 'max' => 200],
            [['id_penyusun'], 'string', 'max' => 9],
            [['id_publikasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_publikasi' => 'Id Publikasi',
            'nama_publikasi' => 'Nama Publikasi',
            'tgl_upload' => 'Tgl Upload',
            'tgl_rilis' => 'Tgl Rilis',
            'tgl_periksa_bidang' => 'Tgl Periksa Bidang',
            'tgl_periksa_ipds' => 'Tgl Periksa Ipds',
            'id_penyusun' => 'Id Penyusun',
            'tahun' => 'Tahun',
        ];
    }
}
