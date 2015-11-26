<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Mtprovinces]].
 *
 * @see Mtprovinces
 */
class MtprovincesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Mtprovinces[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mtprovinces|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}