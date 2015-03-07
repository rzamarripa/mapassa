<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MENUUSUARIOS;

/**
 * MENUUSUARIOSSEARCH represents the model behind the search form about `app\models\MENUUSUARIOS`.
 */
class MENUUSUARIOSSEARCH extends MENUUSUARIOS
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDPADRE', 'IDLLAVE', 'DESCRI', 'TIPO', 'COD_USU', 'IDPRIO'], 'safe'],
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
        $query = MENUUSUARIOS::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'IDPADRE', $this->IDPADRE])
            ->andFilterWhere(['like', 'IDLLAVE', $this->IDLLAVE])
            ->andFilterWhere(['like', 'DESCRI', $this->DESCRI])
            ->andFilterWhere(['like', 'TIPO', $this->TIPO])
            ->andFilterWhere(['like', 'COD_USU', $this->COD_USU])
            ->andFilterWhere(['like', 'IDPRIO', $this->IDPRIO]);

        return $dataProvider;
    }
}
