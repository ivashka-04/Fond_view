<?php


namespace app\controllers;
use app\models\CommentForm;
use app\models\News;
use Yii;



class NewsController extends AppController
{
    /**
     * @return string
     */
    public function actionView()
    {

        $id = \Yii::$app->request->get('id');
        $post_news = News::findOne($id);
        if(empty($post_news)) return $this->render('newsall');
        $news = News::findOne($id);
        $this->setMeta($news->keywords, $news->discription);
        $comments = $post_news -> comments;
//        $comments = $post_news -> getDate();
        $commentForm = new CommentForm();
        $comments = $post_news ->getNewsComments();

                return $this->render('view',
        ['post_news'=> $post_news,
            'comments' =>$comments,
            'commentForm' => $commentForm,
            ]





            );
    }

    public function actionIndex(){

        $this->setMeta('Project V');

    }

    public function actionNewsall()
    {

        return $this->render('newsall');
    }

    public function actionComment($id)
    {
        $model = new CommentForm();
        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', '
Ваш комментарий будет добавлен в ближайшее время!');
                return $this->redirect(['news/view','id'=>$id]);
            }
            else echo 'error';
        }
    }







}