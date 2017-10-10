<?php

namespace app\models;

use yii\db\ActiveRecord;

use Yii;

/**
 * This is the model class for table "stories".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $author
 * @property string $text
 * @property string $date_create
 * @property string $image
 */
class Stories extends ActiveRecord
{
    public $image;
    public $gallery;
    /**
     * @inheritdoc
     */


    public static function tableName()
    {
        return 'stories';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['author', 'text', 'date_create'], 'required'],
            [['text'], 'string'],
            [['date_create'], 'safe'],
            [['author'], 'string', 'max' => 155],
            [['image'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'author' => 'Author',
            'text' => 'Text',
            'date_create' => 'Date Create',
            'image' => 'Image',
        ];
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
}
