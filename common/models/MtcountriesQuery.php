<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Mtcountries]].
 *
 * @see Mtcountries
 */
class MtcountriesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Mtcountries[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mtcountries|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}