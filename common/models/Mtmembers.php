<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mtmembers".
 *
 * @property string $member_id
 * @property string $member_group_id
 * @property string $member_identity_type_id
 * @property string $member_identity_number
 * @property string $member_code
 * @property string $member_sex
 * @property string $member_address
 * @property string $member_city_id
 * @property string $member_address_zipcode
 * @property string $member_contact_phone
 * @property string $member_contact_mobile
 * @property string $member_contact_email
 * @property string $member_picture
 * @property string $member_remark
 * @property string $member_created
 * @property string $member_updated
 * @property string $member_status
 * @property string $member_register_date
 * @property string $member_card_status
 *
 * @property Mtmembergroups $memberGroup
 * @property Mtidentitytypes $memberIdentityType
 * @property Mtcities $memberCity
 */
class Mtmembers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtmembers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_group_id', 'member_identity_type_id', 'member_identity_number', 'member_code', 'member_address', 'member_city_id', 'member_address_zipcode', 'member_contact_phone', 'member_contact_mobile', 'member_contact_email', 'member_picture', 'member_remark', 'member_created', 'member_updated', 'member_register_date'], 'required'],
            [['member_group_id', 'member_identity_type_id', 'member_city_id'], 'integer'],
            [['member_sex', 'member_status', 'member_card_status'], 'string'],
            [['member_created', 'member_updated', 'member_register_date'], 'safe'],
            [['member_identity_number', 'member_code', 'member_address', 'member_address_zipcode', 'member_contact_phone', 'member_contact_mobile', 'member_contact_email', 'member_picture', 'member_remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_id' => Yii::t('app', 'Member ID'),
            'member_group_id' => Yii::t('app', 'Member Group ID'),
            'member_identity_type_id' => Yii::t('app', 'Member Identity Type ID'),
            'member_identity_number' => Yii::t('app', 'Member Identity Number'),
            'member_code' => Yii::t('app', 'Member Code'),
            'member_sex' => Yii::t('app', 'Member Sex'),
            'member_address' => Yii::t('app', 'Member Address'),
            'member_city_id' => Yii::t('app', 'Member City ID'),
            'member_address_zipcode' => Yii::t('app', 'Member Address Zipcode'),
            'member_contact_phone' => Yii::t('app', 'Member Contact Phone'),
            'member_contact_mobile' => Yii::t('app', 'Member Contact Mobile'),
            'member_contact_email' => Yii::t('app', 'Member Contact Email'),
            'member_picture' => Yii::t('app', 'Member Picture'),
            'member_remark' => Yii::t('app', 'Member Remark'),
            'member_created' => Yii::t('app', 'Member Created'),
            'member_updated' => Yii::t('app', 'Member Updated'),
            'member_status' => Yii::t('app', 'Member Status'),
            'member_register_date' => Yii::t('app', 'Member Register Date'),
            'member_card_status' => Yii::t('app', 'Member Card Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberGroup()
    {
        return $this->hasOne(Mtmembergroups::className(), ['member_group_id' => 'member_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberIdentityType()
    {
        return $this->hasOne(Mtidentitytypes::className(), ['identity_id' => 'member_identity_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberCity()
    {
        return $this->hasOne(Mtcities::className(), ['city_id' => 'member_city_id']);
    }

    /**
     * @inheritdoc
     * @return MtmembersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtmembersQuery(get_called_class());
    }
}
