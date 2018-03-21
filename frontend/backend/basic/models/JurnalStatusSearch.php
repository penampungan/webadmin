<?php

namespace frontend\backend\basic\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\basic\models\JurnalStatus;

/**
 * JurnalStatusSearch represents the model behind the search form of `frontend\backend\basic\models\JurnalStatus`.
 */
class JurnalStatusSearch extends JurnalStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STT_PAY'], 'integer'],
            [['STT_PAY_NM', 'KETERANGAN'], 'safe'],
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
        $query = JurnalStatus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'STT_PAY' => $this->STT_PAY,
        ]);

        $query->andFilterWhere(['like', 'STT_PAY_NM', $this->STT_PAY_NM])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN]);

        return $dataProvider;
    }
}
