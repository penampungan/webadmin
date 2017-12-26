<?php

namespace frontend\backend\sistem\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\backend\sistem\models\ModulPermission;

/**
 * ModulPermissionSearch represents the model behind the search form of `frontend\backend\sistem\models\ModulPermission`.
 */
class ModulPermissionSearch extends ModulPermission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'MODUL_ID', 'STATUS', 'BTN_VIEW', 'BTN_REVIEW', 'BTN_CREATE', 'BTN_EDIT', 'BTN_DELETE', 'BTN_SIGN1', 'BTN_SIGN2', 'BTN_SIGN3', 'BTN_SIGN4', 'BTN_SIGN5', 'CREATE_AT'], 'integer'],
            [['USER_UNIX', 'CREATE_BY', 'UPDATE_BY', 'UPDATE_AT'], 'safe'],
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
        $query = ModulPermission::find();

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
            'STATUS' => $this->STATUS,
            'BTN_VIEW' => $this->BTN_VIEW,
            'BTN_REVIEW' => $this->BTN_REVIEW,
            'BTN_CREATE' => $this->BTN_CREATE,
            'BTN_EDIT' => $this->BTN_EDIT,
            'BTN_DELETE' => $this->BTN_DELETE,
            'BTN_SIGN1' => $this->BTN_SIGN1,
            'BTN_SIGN2' => $this->BTN_SIGN2,
            'BTN_SIGN3' => $this->BTN_SIGN3,
            'BTN_SIGN4' => $this->BTN_SIGN4,
            'BTN_SIGN5' => $this->BTN_SIGN5,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'USER_UNIX', $this->USER_UNIX])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY]);

        return $dataProvider;
    }
}
