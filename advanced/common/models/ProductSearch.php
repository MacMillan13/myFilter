<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

/**
 * ProductSearch represents the model behind the search form of `common\models\Product`.
 */
class ProductSearch extends Product
{
    public $min_price;
    public $max_price;
    public $min_length;
    public $max_length;
    public $min_width;
    public $max_width;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bought', 'recommend', 'discount'], 'integer'],
            [['title', 'content', 'description', 'date', 'country', 'manufacturer', 'image'], 'safe'],
            [['length', 'width', 'min_length', 'max_length','min_width', 'max_width','min_price', 'max_price', 'price'], 'number'],
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
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 3
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'bought' => $this->bought,
            'recommend' => $this->recommend,
            'discount' => $this->discount,
            'length' => $this->length,
            'width' => $this->width,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['country' => $this->country])
            ->andFilterWhere(['manufacturer' => $this->manufacturer])
            ->andFilterWhere([
                'and',
                ['>=', 'price', $this->min_price],
                ['<=', 'price', $this->max_price],
            ])
            ->andFilterWhere([
                'and',
                ['>=', 'length', $this->min_length],
                ['<=', 'length', $this->max_length],
            ])
            ->andFilterWhere([
                'and',
                ['>=', 'width', $this->min_width],
                ['<=', 'width', $this->max_width],
            ])
            ->andFilterWhere(['like', 'image', $this->image]);


        return $dataProvider;
    }

}
