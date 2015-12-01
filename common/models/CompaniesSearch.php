<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Companies;

/**
 * CompaniesSearch represents the model behind the search form about `common\models\Companies`.
 */
class CompaniesSearch extends Companies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'company_country_id', 'company_province_id', 'company_city_id', 'company_zipcode'], 'integer'],
            [['company_name', 'company_address', 'company_email', 'company_phone', 'company_phone_ii', 'company_contact_person', 'company_website', 'company_status', 'company_key', 'company_logo'], 'safe'],
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
        $query = Companies::find();

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
            'company_id' => $this->company_id,
            'company_country_id' => $this->company_country_id,
            'company_province_id' => $this->company_province_id,
            'company_city_id' => $this->company_city_id,
            'company_zipcode' => $this->company_zipcode,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'company_email', $this->company_email])
            ->andFilterWhere(['like', 'company_phone', $this->company_phone])
            ->andFilterWhere(['like', 'company_phone_ii', $this->company_phone_ii])
            ->andFilterWhere(['like', 'company_contact_person', $this->company_contact_person])
            ->andFilterWhere(['like', 'company_website', $this->company_website])
            ->andFilterWhere(['like', 'company_status', $this->company_status])
            ->andFilterWhere(['like', 'company_key', $this->company_key])
            ->andFilterWhere(['like', 'company_logo', $this->company_logo]);

        return $dataProvider;
    }
}
