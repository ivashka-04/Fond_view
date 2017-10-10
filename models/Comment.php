<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property string $id_comment
 * @property integer $news_id
 * @property string $email_author
 * @property string $text
 * @property string $dt_create
 * @property integer $status
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const STATUS_ALLOW = 1;
    const STATUS_DISALLOW = 0;
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_author', 'text', 'dt_create'], 'required'],
            [['email_author', 'text'], 'string'],
            [['dt_create'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'email_author' => 'Email Author',
            'text' => 'Text',
            'dt_create' => 'Dt Create',
        ];
    }


    public function getDate()
    {
        return Yii::$app->formatter->asDatetime($this->dt_create);
    }

    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
    }
    public function isAllowed()
    {
        return $this->status;
    }
    public function allow()
    {
        $this->status = self::STATUS_ALLOW;
        return $this->save(false);
    }
    public function disallow()
    {
        $this->status = self::STATUS_DISALLOW;
        return $this->save(false);
    }
}
