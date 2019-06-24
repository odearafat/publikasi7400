<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_instansi_distribusi".
 *
 * @property int $id_instansi
 * @property string $nama_instansi
 * @property string $alamat_instansi
 * @property int $internal_or_no
 *
 * @property DaftarDistribusi[] $daftarDistribusis
 */
class MasterInstansiDistribusi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_instansi_distribusi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_instansi', 'alamat_instansi', 'internal_or_no'], 'required'],
            [['alamat_instansi'], 'string'],
            [['internal_or_no'], 'integer'],
            [['nama_instansi'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_instansi' => 'Id Instansi',
            'nama_instansi' => 'Nama Instansi',
            'alamat_instansi' => 'Alamat Instansi',
            'internal_or_no' => 'Internal Or No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDaftarDistribusis()
    {
        return $this->hasMany(DaftarDistribusi::className(), ['id_instansi' => 'id_instansi']);
    }
}
