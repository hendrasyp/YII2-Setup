<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mtidentitytypes".
 *
 * @property string $identity_id
 * @property string $identity_name
 *
 * @property Mtmembers[] $mtmembers
 */
class Mtidentitytypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtidentitytypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identity_name'], 'required'],
            [['identity_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'identity_id' => Yii::t('app', 'Identity ID'),
            'identity_name' => Yii::t('app', 'Identity Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmembers()
    {
        return $this->hasMany(Mtmembers::className(), ['member_identity_type_id' => 'identity_id']);
    }

    /**
     * @inheritdoc
     * @return MtidentitytypesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtidentitytypesQuery(get_called_class());
    }
}
