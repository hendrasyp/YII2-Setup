<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mtprovinces;

/**
 * MtprovincesSearch represents the model behind the search form about `common\models\Mtprovinces`.
 */
class MtprovincesSearch extends Mtprovinces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id'], 'integer'],
            [['province_name','province_country_id',], 'safe'],
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
        $query = Mtprovinces::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
						'pagination' => [
								'pageSize' => 5,
						]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }
				$query->joinWith('provinceCountry');
        $query->andFilterWhere([
            'province_id' => $this->province_id,
            'province_created' => $this->province_created,
            'province_updated' => $this->province_updated,
        ]);

        $query->andFilterWhere(['like', 'province_name', $this->province_name])
            ->andFilterWhere(['like', 'province_status', $this->province_status])
            ->andFilterWhere(['like', 'mtcountries.country_name', $this->province_country_id]);
				$query->groupBy(['province_country_id','province_id']);
				$query->orderBy(['province_country_id'=> 'ASC','province_name'=> 'ASC']);
        return $dataProvider;
    }
}
