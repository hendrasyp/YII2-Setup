<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mtcities;

/**
 * MtcitiesSearch represents the model behind the search form about `common\models\Mtcities`.
 */
class MtcitiesSearch extends Mtcities
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'city_country_id'], 'integer'],
            [['city_country_id','city_province_id','city_name'], 'safe'],
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
        $query = Mtcities::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
				$query->joinWith('cityProvince');
				$query->joinWith('cityCountry');

        $query->andFilterWhere([
            'city_id' => $this->city_id,
            'city_created' => $this->city_created,
            'city_updated' => $this->city_updated,
            'city_status' => 'ACTIVE',
        ]);

        $query->andFilterWhere(['like', 'city_name', $this->city_name])
            ->andFilterWhere(['like', 'city_status', $this->city_status])
            ->andFilterWhere(['like', 'mtcountries.country_name', $this->city_country_id])
            ->andFilterWhere(['like', 'mtprovinces.province_name', $this->city_province_id]);

        return $dataProvider;
    }
}
