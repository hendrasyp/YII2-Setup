<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mtmembergroups".
 *
 * @property string $member_group_id
 * @property string $member_group_code
 * @property string $member_group_name
 * @property double $member_group_price
 * @property string $member_group_remark
 * @property string $member_group_created
 * @property string $member_group_date
 *
 * @property Mtmembers[] $mtmembers
 */
class Mtmembergroups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtmembergroups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_group_code', 'member_group_name', 'member_group_price', 'member_group_remark', 'member_group_created', 'member_group_date'], 'required'],
            [['member_group_price'], 'number'],
            [['member_group_remark'], 'string'],
            [['member_group_created', 'member_group_date'], 'safe'],
            [['member_group_code'], 'string', 'max' => 2],
            [['member_group_name'], 'string', 'max' => 50],
            [['member_group_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_group_id' => Yii::t('app', 'Member Group ID'),
            'member_group_code' => Yii::t('app', 'Member Group Code'),
            'member_group_name' => Yii::t('app', 'Member Group Name'),
            'member_group_price' => Yii::t('app', 'Member Group Price'),
            'member_group_remark' => Yii::t('app', 'Member Group Remark'),
            'member_group_created' => Yii::t('app', 'Member Group Created'),
            'member_group_date' => Yii::t('app', 'Member Group Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmembers()
    {
        return $this->hasMany(Mtmembers::className(), ['member_group_id' => 'member_group_id']);
    }

    /**
     * @inheritdoc
     * @return MtmembergroupsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtmembergroupsQuery(get_called_class());
    }
}
