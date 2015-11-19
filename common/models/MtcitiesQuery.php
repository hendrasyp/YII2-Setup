<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Mtcities]].
 *
 * @see Mtcities
 */
class MtcitiesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Mtcities[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mtcities|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}