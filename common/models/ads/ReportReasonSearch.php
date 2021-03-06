<?php

namespace common\models\ads;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ads\ReportReason;

/**
 * ReportReasonSearch represents the model behind the search form about `common\models\ads\ReportReason`.
 */
class ReportReasonSearch extends ReportReason
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'type', 'status', 'sort_number', 'created_at', 'updated_at'], 'integer'],
            [['slug', 'title', 'body', 'thumbnail_base_url', 'thumbnail_path'], 'safe'],
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
        $query = ReportReason::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id'          => $this->id,
            'parent_id'   => $this->parent_id,
            'type'        => $this->type,
            'status'      => $this->status,
            'sort_number' => $this->sort_number,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'thumbnail_base_url', $this->thumbnail_base_url])
            ->andFilterWhere(['like', 'thumbnail_path', $this->thumbnail_path]);

        return $dataProvider;
    }
}
