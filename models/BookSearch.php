<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form of `app\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booksid', 'lenderid'], 'integer'],
            [['booksname', 'author', 'press', 'publicationdate', 'lenddate', 'returndate', 'lendername'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Book::find();

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
            'booksid' => $this->booksid,
            'publicationdate' => $this->publicationdate,
            'lenddate' => $this->lenddate,
            'returndate' => $this->returndate,
            'lenderid' => $this->lenderid,
        ]);

        $query->andFilterWhere(['like', 'booksname', $this->booksname])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'press', $this->press])
            ->andFilterWhere(['like', 'lendername', $this->lendername]);

        return $dataProvider;
    }
}
