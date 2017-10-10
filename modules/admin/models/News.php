<?php

namespace app\modules\admin\models;

use Yii;
use app\models\User;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property string $id_parenet
 * @property string $title
 * @property string $text
 * @property string $date_create
 * @property string $author
 * @property string $image
 * @property string $keywords
 * @property string $discription
 */
class News extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;


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

   /* public function getUserId(){
        return $this->hasOne(user::className(), ['id_parenet' => 'id']);
    }*/


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'title', 'text', 'date_create', 'author'], 'required'],
//            [['id_parenet'], 'integer'],
            [['text'], 'string'],
            [['date_create'], 'safe'],
            [['title', 'author'], 'string', 'max' => 155],

            [['keywords', 'discription'], 'string', 'max' => 255],
            [['image'], 'file',  'extensions' => 'png, jpg'],
            [['gallery'], 'file', /*'skipOnEmpty' => false,*/ 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
//            'id_parenet' => 'Id Автора',
            'title' => 'Название новости',
            'text' => 'Текст новости',
            'date_create' => 'Дата создания',
            'author' => 'Автор',
            'image' => 'Фото',
            'gallery' => 'Галерея (Разрешены файлы только jpg и png, максимальное колличество не должно превышать 4 шт)',
            'keywords' => 'Ключевые слова(SEO)',
           'discription' => 'Описание(SEO)',
        ];
    }

    public function upload()
    {
       if ($this->validate()){
           $path = 'upload/store' . $this->image->baseName . '.' . $this->image->extension;
           $this->image->saveAs($path);
           $this->attachImage($path, true);
           @unlink($path);
           return true;
       }else {
           false;
       }

    }
    public function uploadGallery()
    {
        if ($this->validate()){
            foreach ($this->gallery as $file) {
                $path = 'upload/store' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else {
            false;
        }

    }

}

