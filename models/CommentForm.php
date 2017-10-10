<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 18.08.2017
 * Time: 13:44
 */

namespace app\models;


use yii\base\Model;

class CommentForm extends Model
{
    public $comment;
    public $author;

    public function rules()
    {
        return [
            [['comment', 'author'], 'required'],
            [['comment'], 'string', 'length' => [15, 250]],
            [['author'], 'email'],
            [['status'], 'string']

        ];
    }

    public function attributeLabels()
    {
        return [
            'comment' => 'Комментрарий',
            'author' => 'E-mail',
        ];
    }

    public function saveComment($news_id)
    {

        $comment = new Comment;
        $comment->text = $this->comment;
        $comment->email_author = $this->author;
        $comment->news_id = $news_id;
        $comment->dt_create = date('Y-m-d');
        $comment->status = 0;
        return $comment->save();
    }
}