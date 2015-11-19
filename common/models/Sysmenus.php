<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sysmenus".
 *
 * @property string $menu_id
 * @property string $menu_name
 * @property string $menu_title
 * @property string $menu_url
 * @property string $menu_parent_id
 * @property string $menu_icon_class
 */
class Sysmenus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sysmenus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_parent_id'], 'integer'],
            [['menu_name', 'menu_title', 'menu_url', 'menu_icon_class'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
            'menu_title' => 'Menu Title',
            'menu_url' => 'Menu Url',
            'menu_parent_id' => 'Menu Parent ID',
            'menu_icon_class' => 'Menu Icon Class',
        ];
    }

    /**
     * @inheritdoc
     * @return SysmenusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SysmenusQuery(get_called_class());
    }
}
