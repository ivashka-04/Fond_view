<?php

namespace app\modules\admin\models;

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
 * @property string $discription
 * @property string $keywords
 * @property string $new
 */
class Stories extends \yii\db\ActiveRecord
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
        return 'stories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[/*'user_id',*/ 'author', 'text', 'date_create'], 'required'],
//            [['user_id'], 'integer'],
            [['text', 'new'], 'string'],
            [['date_create'], 'safe'],
            [['author'], 'string', 'max' => 155],
            /*[['image'], 'string', 'max' => 100],*/
            [['image'], 'file',  'extensions' => 'png, jpg'],
            [['discription', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
//            'user_id' => 'ID автора',
            'author' => 'Автор',
            'text' => 'Текст',
            'date_create' => 'Дата создания',
            'image' => 'Изображение',
            'discription' => 'Описание(SEO)',
            'keywords' => 'Ключевые слова(SEO)',
            'new' => 'Статус',
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
