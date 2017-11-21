<?php
namespace app\modules\admin\models;
/**
 * Created by PhpStorm.
 * User: Ivashka
 * Date: 21.11.2017
 * Time: 23:58
 */
use yii\base\Model;
use Yii;
use app\models\User;


class PasswordChangeForm extends Model
{
    public $currentPassword;
    public $newPassword;
    public $newPasswordRepeat;

    /**
     * @var User
     */
    private $_user;

    /**
     * @param User $user
     * @param array $config
     */

    public function __construct(User $user, $config = [])
    {
        $this->_user = $user;
        parent::__construct($config);
    }

    public function rules()
    {
        return [

            [['currentPassword', 'newPassword', 'newPasswordRepeat'], 'required'],
            ['currentPassword', 'currentPassword'],
            ['newPassword', 'string', 'min' => 8],
            ['newPasswordRepeat', 'compare', 'compareAttribute' => 'newPassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'newPassword' => Yii::t('app', 'USER_NEW_PASSWORD'),
            'newPasswordRepeat' => Yii::t('app', 'USER_REPEAT_PASSWORD'),
            'currentPassword' => Yii::t('app', 'USER_CURRENT_PASSWORD'),
        ];
    }

    /**
     * @param string $attribute
     * @param array $params
     */

    public function currentPassword($attribute, $params)
    {
        if (!$this->hasErrors()){
            if (!$this->_user->validatePassword($this->$attribute)){
                $this->addError($attribute, Yii::t('app', 'ERROR_WRONG_CURRENT_PASSWORD'));
            }
        }

    }

    /**
     * @return boolean
     */

    public function changePassword()
    {
        if ($this->validate()){
            $user = $this->_user;
            $user->setPassword($this->newPassword);
            return $user->save();

        } else {
            return false;
        }

    }



}