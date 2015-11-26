<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mtprovinces".
 *
 * @property string $province_id
 * @property string $province_name
 * @property string $province_country_id
 * @property string $province_created
 * @property string $province_updated
 * @property string $province_status
 *
 * @property Mtcities[] $mtcities
 * @property Mtcountries $provinceCountry
 */
class Mtprovinces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtprovinces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_name', 'province_country_id', 'province_created', 'province_updated'], 'required'],
            [['province_country_id'], 'string'],
            [['province_created', 'province_updated'], 'safe'],
            [['province_status'], 'string'],
            [['province_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province_id' => Yii::t('app', 'Province ID'),
            'province_name' => Yii::t('app', 'Province Name'),
            'province_country_id' => Yii::t('app', 'Province Country ID'),
            'province_created' => Yii::t('app', 'Province Created'),
            'province_updated' => Yii::t('app', 'Province Updated'),
            'province_status' => Yii::t('app', 'Province Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtcities()
    {
        return $this->hasMany(Mtcities::className(), ['city_province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinceCountry()
    {
        return $this->hasOne(Mtcountries::className(), ['country_id' => 'province_country_id']);
    }

    /**
     * @inheritdoc
     * @return MtprovincesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtprovincesQuery(get_called_class());
    }
}
