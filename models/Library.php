<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Library extends ActiveRecord
{
    public function rules()
    {
        return [
            [['booksname', 'author', 'press', 'publicationdate', 'lenddate', 'returndate', 'lendername', 'lenderid'], 'required'],
            [['publicationdate', 'lenddate', 'returndate'], 'safe'],
            [['lenderid'], 'integer'],
            [['booksname', 'press'], 'string', 'max' => 100],
            [['author', 'lendername'], 'string', 'max' => 50],
        ];
    }


    public function attributeLabels()
    {
        return [
            'booksid' => 'Booksid',
            'booksname' => 'Booksname',
            'author' => 'Author',
            'press' => 'Press',
            'publicationdate' => 'Publicationdate',
            'lenddate' => 'Lenddate',
            'returndate' => 'Returndate',
            'lendername' => 'Lendername',
            'lenderid' => 'Lenderid',
        ];
    }
}
