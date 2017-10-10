<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property string $id_parenet
 * @property string $title
 * @property string $text
 * @property string $date_create
 * @property string $author



 */
class News extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_parenet', 'title', 'text', 'date_create', 'author'], 'required'],
            [['id_parenet'], 'integer'],
            [['text'], 'string'],
            [['date_create'], 'safe'],
            [['title', 'author'], 'string', 'max' => 155],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id новости',
            'id_parenet' => 'Id Parenet',
            'title' => 'Название',
            'text' => 'Текст',
            'date_create' => 'Дата написания',
            'author' => 'Автор',
        ];
    }

    /**
     * @inheritdoc
     * @return ActiveQuery|\yii\db\ActiveQuery
     */

      public function getComments()
      {
        return $this->hasMany(Comment::className(), ['news_id' => 'id']);
      }

      public function getNewsComments()
      {
          return $this->getComments()->where(['status'=>1])->all();
      }




}
