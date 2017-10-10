<?php

namespace app\modules\admin\models;

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
    const STATUS_ALLOW = 1;
    const STATUS_DISALLOW = 0;
    /**
     * @inheritdoc
     */
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
            [['news_id', 'status'], 'integer'],
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
            'news_id' => 'News ID',
            'email_author' => 'Email Author',
            'text' => 'Text',
            'dt_create' => 'Dt Create',
            'status' => 'Status',
        ];
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
