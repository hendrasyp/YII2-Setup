<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mtmembers;

/**
 * MtmembersSearch represents the model behind the search form about `common\models\Mtmembers`.
 */
class MtmembersSearch extends Mtmembers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'member_group_id', 'member_identity_type_id', 'member_city_id'], 'integer'],
            [['member_identity_number', 'member_code', 'member_sex', 'member_address', 'member_address_zipcode', 'member_contact_phone', 'member_contact_mobile', 'member_contact_email', 'member_picture', 'member_remark', 'member_created', 'member_updated', 'member_status', 'member_register_date', 'member_card_status'], 'safe'],
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
        $query = Mtmembers::find();

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
            'member_id' => $this->member_id,
            'member_group_id' => $this->member_group_id,
            'member_identity_type_id' => $this->member_identity_type_id,
            'member_city_id' => $this->member_city_id,
            'member_created' => $this->member_created,
            'member_updated' => $this->member_updated,
            'member_register_date' => $this->member_register_date,
        ]);

        $query->andFilterWhere(['like', 'member_identity_number', $this->member_identity_number])
            ->andFilterWhere(['like', 'member_code', $this->member_code])
            ->andFilterWhere(['like', 'member_sex', $this->member_sex])
            ->andFilterWhere(['like', 'member_address', $this->member_address])
            ->andFilterWhere(['like', 'member_address_zipcode', $this->member_address_zipcode])
            ->andFilterWhere(['like', 'member_contact_phone', $this->member_contact_phone])
            ->andFilterWhere(['like', 'member_contact_mobile', $this->member_contact_mobile])
            ->andFilterWhere(['like', 'member_contact_email', $this->member_contact_email])
            ->andFilterWhere(['like', 'member_picture', $this->member_picture])
            ->andFilterWhere(['like', 'member_remark', $this->member_remark])
            ->andFilterWhere(['like', 'member_status', $this->member_status])
            ->andFilterWhere(['like', 'member_card_status', $this->member_card_status]);

        return $dataProvider;
    }
}
