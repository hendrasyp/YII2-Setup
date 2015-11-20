<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mtidentitytypes;

/**
 * MtidentitytypesSearch represents the model behind the search form about `app\models\Mtidentitytypes`.
 */
class MtidentitytypesSearch extends Mtidentitytypes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identity_id'], 'integer'],
            [['identity_name'], 'safe'],
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
        $query = Mtidentitytypes::find();

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
            'identity_id' => $this->identity_id,
        ]);

        $query->andFilterWhere(['like', 'identity_name', $this->identity_name]);

        return $dataProvider;
    }
}
