<?php namespace Kaisarhan\Mailform;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            '\Kaisarhan\MailForm\Components\MailForm' => 'MailForm'
        ];
    }

    public function pluginDetails()
    {
        return [
            'name'        => 'Mail Form',
            'description' => 'Простая отправка почты из Frontend на почту каторы будет указан у вас в CMS Plugin Kaisarhan',
            'author'      => 'Kaisarhan',
            'icon'        => 'icon-envelope'
        ];
    }
}
