<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $name
 * @property string $text
 * @property string $date_create
 * @property string $documents
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'text', 'date_create', 'documents'], 'required'],
            [['user_id'], 'integer'],
            [['date_create'], 'safe'],
            [['name'], 'string', 'max' => 155],
            [['text'], 'string', 'max' => 45],
            [['documents'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'text' => 'Text',
            'date_create' => 'Date Create',
            'documents' => 'Documents',
        ];
    }
}
