<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $booksid 自动增长
 * @property string $booksname
 * @property string $author
 * @property string $press
 * @property string $publicationdate
 * @property string $lenddate
 * @property string $returndate
 * @property string $lendername
 * @property int $lenderid
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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
