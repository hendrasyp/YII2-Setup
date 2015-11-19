<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MtCountries;

/**
 * MtCountriesSearch represents the model behind the search form about `common\models\MtCountries`.
 */
class MtCountriesSearch extends MtCountries
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            //[['country_name', 'country_created', 'country_updated', 'country_status'], 'safe'],
            [['country_name'], 'safe'],
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
        $query = MtCountries::find();

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
            'country_id' => $this->country_id,
            //'country_created' => $this->country_created,
            //'country_updated' => $this->country_updated,
            'country_status' => 'ACTIVE',
        ]);

        $query->andFilterWhere(['like', 'country_name', $this->country_name]);
            //->andFilterWhere(['like', 'country_status', $this->country_status]);

        return $dataProvider;
    }
}
