<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mtcities".
 *
 * @property string $city_id
 * @property string $city_name
 * @property string $city_created
 * @property string $city_updated
 * @property string $city_status
 * @property string $city_country_id
 * @property string $city_province_id
 *
 * @property Mtprovinces $cityProvince
 * @property Mtcountries $cityCountry
 * @property Mtmembers[] $mtmembers
 */
class Mtcities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtcities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_name', 'city_created', 'city_updated', 'city_country_id', 'city_province_id'], 'required'],
            [['city_created', 'city_updated'], 'safe'],
            [['city_status'], 'string'],
            [['city_country_id', 'city_province_id'], 'integer'],
            [['city_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => Yii::t('app', 'City ID'),
            'city_name' => Yii::t('app', 'City Name'),
            'city_created' => Yii::t('app', 'City Created'),
            'city_updated' => Yii::t('app', 'City Updated'),
            'city_status' => Yii::t('app', 'City Status'),
            'city_country_id' => Yii::t('app', 'City Country ID'),
            'city_province_id' => Yii::t('app', 'City Province ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityProvince()
    {
        return $this->hasOne(Mtprovinces::className(), ['province_id' => 'city_province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityCountry()
    {
        return $this->hasOne(Mtcountries::className(), ['country_id' => 'city_country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmembers()
    {
        return $this->hasMany(Mtmembers::className(), ['member_city_id' => 'city_id']);
    }

    /**
     * @inheritdoc
     * @return MtcitiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtcitiesQuery(get_called_class());
    }
}
