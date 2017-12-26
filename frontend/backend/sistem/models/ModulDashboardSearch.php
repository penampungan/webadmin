<?php

namespace frontend\backend\sistem\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\sistem\models\ModulDashboard;

/**
 * ModulDashboardSearch represents the model behind the search form of `frontend\backend\sistem\models\ModulDashboard`.
 */
class ModulDashboardSearch extends ModulDashboard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'MODUL_ID', 'MODUL_GRP', 'SORT_PARENT', 'SORT', 'MODUL_STS'], 'integer'],
            [['MODUL_NM', 'MODUL_DCRP', 'BTN_NM', 'BTN_URL', 'BTN_ICON'], 'safe'],
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
        $query = ModulDashboard::find();

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
            'MODUL_ID' => $this->MODUL_ID,
            'MODUL_GRP' => $this->MODUL_GRP,
            'SORT_PARENT' => $this->SORT_PARENT,
            'SORT' => $this->SORT,
            'MODUL_STS' => $this->MODUL_STS,
        ]);

        $query->andFilterWhere(['like', 'MODUL_NM', $this->MODUL_NM])
            ->andFilterWhere(['like', 'MODUL_DCRP', $this->MODUL_DCRP])
            ->andFilterWhere(['like', 'BTN_NM', $this->BTN_NM])
            ->andFilterWhere(['like', 'BTN_URL', $this->BTN_URL])
            ->andFilterWhere(['like', 'BTN_ICON', $this->BTN_ICON]);

        return $dataProvider;
    }
}
