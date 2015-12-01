<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property string $company_id
 * @property string $company_name
 * @property string $company_address
 * @property string $company_country_id
 * @property string $company_province_id
 * @property string $company_city_id
 * @property integer $company_zipcode
 * @property string $company_email
 * @property string $company_phone
 * @property string $company_phone_ii
 * @property string $company_contact_person
 * @property string $company_website
 * @property string $company_status
 * @property string $company_key
 * @property string $company_logo
 *
 * @property Mtcities $companyCity
 * @property Mtcountries $companyCountry
 * @property Mtprovinces $companyProvince
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_country_id', 'company_province_id', 'company_city_id', 'company_zipcode'], 'integer'],
            [['company_status'], 'string'],
            [['company_key', 'company_logo'], 'required'],
            [['company_name', 'company_address', 'company_key', 'company_logo'], 'string', 'max' => 255],
            [['company_email', 'company_phone', 'company_phone_ii', 'company_contact_person', 'company_website'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => Yii::t('app', 'ID'),
            'company_name' => Yii::t('app', 'Name'),
            'company_address' => Yii::t('app', 'Address'),
            'company_country_id' => Yii::t('app', 'Country'),
            'company_province_id' => Yii::t('app', 'Province'),
            'company_city_id' => Yii::t('app', 'City'),
            'company_zipcode' => Yii::t('app', 'Postal Code'),
            'company_email' => Yii::t('app', 'Email'),
            'company_phone' => Yii::t('app', 'Phone'),
            'company_phone_ii' => Yii::t('app', 'Phone 2'),
            'company_contact_person' => Yii::t('app', 'Contact Person'),
            'company_website' => Yii::t('app', 'Website'),
            'company_status' => Yii::t('app', 'Status'),
            'company_key' => Yii::t('app', 'Auth Key'),
            'company_logo' => Yii::t('app', 'Logo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyCity()
    {
        return $this->hasOne(Mtcities::className(), ['city_id' => 'company_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyCountry()
    {
        return $this->hasOne(Mtcountries::className(), ['country_id' => 'company_country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyProvince()
    {
        return $this->hasOne(Mtprovinces::className(), ['province_id' => 'company_province_id']);
    }

    /**
     * @inheritdoc
     * @return CompaniesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompaniesQuery(get_called_class());
    }
}
