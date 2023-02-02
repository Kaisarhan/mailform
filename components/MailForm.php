<?php namespace Kaisarhan\MailForm\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;
use Input;
use Mail;

class MailForm extends ComponentBase
{

    Public function componentDetails()
    {
        return [
            'name'        => 'MailTo',
            'description' => 'Простая отправка почты плагин от Кайсархан'
        ];
    }

    Public function onSend()
    {
        $vars = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'content' => Input::get('content')
        ];

        Mail::send('kaisarhan.mailform::mail.message', $vars, function($message){
            $message->to('kaisarhan@mail.ru', 'Admin Personal');
            $message->subject('New message test from MailForm');
        });
    }
}
