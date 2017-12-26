<?php

namespace frontend\backend\sistem\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\sistem\models\Cronjob;

/**
 * CronjobSearch represents the model behind the search form of `frontend\backend\sistem\models\Cronjob`.
 */
class CronjobSearch extends Cronjob
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STT'], 'integer'],
            [['TABEL', 'ACCESS_GROUP', 'STORE_ID', 'UPDATE_TABEL', 'UPDATE_CRONJOB'], 'safe'],
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
        $query = Cronjob::find();

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
            'ID' => $this->ID,
            'UPDATE_TABEL' => $this->UPDATE_TABEL,
            'UPDATE_CRONJOB' => $this->UPDATE_CRONJOB,
            'STT' => $this->STT,
        ]);

        $query->andFilterWhere(['like', 'TABEL', $this->TABEL])
            ->andFilterWhere(['like', 'ACCESS_GROUP', $this->ACCESS_GROUP])
            ->andFilterWhere(['like', 'STORE_ID', $this->STORE_ID]);

        return $dataProvider;
    }
}
