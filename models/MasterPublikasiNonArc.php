<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_publikasi_non_arc".
 *
 * @property int $id_publikasi
 * @property string $nama_publikasi
 * @property string $tgl_rilis
 * @property string $file_cover
 * @property string $file_pdf
 * @property int $status_cetak
 * @property int $status_distribusi
 * @property string $di_bidang
 * @property string $id_penyusun
 * @property string $id_editor_penyusun
 */
class MasterPublikasiNonArc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_publikasi_non_arc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_publikasi', 'nama_publikasi', 'tgl_rilis', 'file_cover', 'file_pdf', 'status_cetak', 'status_distribusi', 'di_bidang', 'id_penyusun', 'id_editor_penyusun'], 'required'],
            [['id_publikasi', 'status_cetak', 'status_distribusi'], 'integer'],
            [['tgl_rilis'], 'safe'],
            [['nama_publikasi', 'file_cover', 'file_pdf'], 'string', 'max' => 200],
            [['di_bidang'], 'string', 'max' => 2],
            [['id_penyusun', 'id_editor_penyusun'], 'string', 'max' => 9],
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
            'tgl_rilis' => 'Tgl Rilis',
            'file_cover' => 'File Cover',
            'file_pdf' => 'File Pdf',
            'status_cetak' => 'Status Cetak',
            'status_distribusi' => 'Status Distribusi',
            'di_bidang' => 'Di Bidang',
            'id_penyusun' => 'Id Penyusun',
            'id_editor_penyusun' => 'Id Editor Penyusun',
        ];
    }
}
