<?php


namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $text;
    public $topic;

    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required'],
            ['email', 'email'],
            ['topic', 'required', 'message'=>'Oops'],
            ['topic', 'string', 'min'=>3, 'tooShort'=>'3 min'],
            ['topic', 'string', 'max'=>5, 'tooLong'=>'5 max'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя:',
            'email' => 'E=mail:',
            'text' => 'Сообщение:',
            'topic' => 'Тема:',
        ];
    }
}