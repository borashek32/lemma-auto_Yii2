<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\captcha\Captcha;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Введите код для отправки сообщения',
        ];
    }

    public function contact($email)
    {
        $body = "Name: {$this->name}<br>Email: {$this->email}";

        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('borashek29@gmail.com')
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
