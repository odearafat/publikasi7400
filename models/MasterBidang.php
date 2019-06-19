<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_bidang".
 *
 * @property string $id_bidang
 * @property string $nm_bidang
 *
 * @property MasterPublikasi[] $masterPublikasis
 */
class MasterBidang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_bidang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bidang', 'nm_bidang'], 'required'],
            [['id_bidang'], 'string', 'max' => 2],
            [['nm_bidang'], 'string', 'max' => 150],
            [['id_bidang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bidang' => 'Id Bidang',
            'nm_bidang' => 'Nm Bidang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPublikasis()
    {
        return $this->hasMany(MasterPublikasi::className(), ['id_bidang' => 'id_bidang']);
    }
}
