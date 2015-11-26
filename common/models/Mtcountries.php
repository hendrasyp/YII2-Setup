<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mtcountries".
 *
 * @property string $country_id
 * @property string $country_name
 * @property string $country_created
 * @property string $country_updated
 * @property string $country_status
 *
 * @property Mtcities[] $mtcities
 * @property Mtprovinces[] $mtprovinces
 */
class Mtcountries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtcountries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_name', 'country_created', 'country_updated'], 'required'],
            [['country_created', 'country_updated'], 'safe'],
            [['country_status'], 'string'],
            [['country_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => Yii::t('app', 'Country ID'),
            'country_name' => Yii::t('app', 'Country Name'),
            'country_created' => Yii::t('app', 'Country Created'),
            'country_updated' => Yii::t('app', 'Country Updated'),
            'country_status' => Yii::t('app', 'Country Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtcities()
    {
        return $this->hasMany(Mtcities::className(), ['city_country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtprovinces()
    {
        return $this->hasMany(Mtprovinces::className(), ['province_country_id' => 'country_id']);
    }

    /**
     * @inheritdoc
     * @return MtcountriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtcountriesQuery(get_called_class());
    }
}
