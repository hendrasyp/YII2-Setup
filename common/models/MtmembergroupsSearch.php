<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mtmembergroups;

/**
 * MtmembergroupsSearch represents the model behind the search form about `common\models\Mtmembergroups`.
 */
class MtmembergroupsSearch extends Mtmembergroups
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_group_id'], 'integer'],
            [['member_group_code', 'member_group_name', 'member_group_remark', 'member_group_created', 'member_group_date'], 'safe'],
            [['member_group_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mtmembergroups::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'member_group_id' => $this->member_group_id,
            'member_group_price' => $this->member_group_price,
            'member_group_created' => $this->member_group_created,
            'member_group_date' => $this->member_group_date,
        ]);

        $query->andFilterWhere(['like', 'member_group_code', $this->member_group_code])
            ->andFilterWhere(['like', 'member_group_name', $this->member_group_name])
            ->andFilterWhere(['like', 'member_group_remark', $this->member_group_remark]);

        return $dataProvider;
    }
}
