<?php
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 09.11.2017
 * Time: 0:35
 */

namespace app\modules\admin\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;
use app\modules\admin\Module;
use app\models\User;
use app\modules\admin\models\PasswordChangeForm;


class ProfileController extends Controller
{
    /*public function behaviors()
    {
        return [
          'access' => [
              'class' => AccessControl::className(),
              'rules' => [
                  [
                      'allow' => true,
                      'roles' => '@',
                  ],
              ],
          ],
        ];
    }*/


    public function  actionIndex()
    {
        return $this->render('index',['model' => $this->findModel(),]);
    }

    /**
     * @return User the loaded model
     */

    private function findModel(){
        return User::findOne(Yii::$app->user->identity->getId());
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionUpdate()
    {
        $model = $this->findModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionPasswordChange()
    {
        $user = $this->findModel();
        $model = new PasswordChangeForm($user);

        if ($model->load(Yii::$app->request->post()) && $model->changePassword()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('password-change', ['model' => $model]);
        }
    }


}


