<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_pegawai".
 *
 * @property string $niplama
 * @property string $nipbaru
 * @property string $gelar_depan
 * @property string $nama
 * @property string $gelar_belakang
 * @property string $email
 * @property string $id_gol
 * @property string $id_org
 * @property string $id_satker
 */
class MasterPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['niplama', 'nipbaru', 'gelar_depan', 'nama', 'gelar_belakang', 'email', 'id_gol', 'id_org', 'id_satker'], 'required'],
            [['niplama'], 'string', 'max' => 9],
            [['nipbaru'], 'string', 'max' => 25],
            [['gelar_depan'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 40],
            [['gelar_belakang'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 30],
            [['id_gol'], 'string', 'max' => 2],
            [['id_org'], 'string', 'max' => 5],
            [['id_satker'], 'string', 'max' => 4],
            [['niplama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'niplama' => 'Niplama',
            'nipbaru' => 'Nipbaru',
            'gelar_depan' => 'Gelar Depan',
            'nama' => 'Nama',
            'gelar_belakang' => 'Gelar Belakang',
            'email' => 'Email',
            'id_gol' => 'Id Gol',
            'id_org' => 'Id Org',
            'id_satker' => 'Id Satker',
        ];
    }
}
