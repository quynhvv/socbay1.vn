<?php

namespace common\models\ads\support;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ads\support\SupportTopicCategory;

/**
 * SupportTopicCategorySearch represents the model behind the search form about `common\models\ads\support\SupportTopicCategory`.
 */
class SupportTopicCategorySearch extends SupportTopicCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'sort_number', 'status', 'created_at', 'updated_at'], 'integer'],
            [['slug', 'title', 'body', 'excerpt', 'icon', 'color'], 'safe'],
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
        $query = SupportTopicCategory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id'          => $this->id,
            'parent_id'   => $this->parent_id,
            'sort_number' => $this->sort_number,
            'status'      => $this->status,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'excerpt', $this->excerpt])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
