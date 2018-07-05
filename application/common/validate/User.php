<?php

namespace app\common\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'name|姓名'   =>  'require|length:5,20|chsAlphaNum',
        'email|邮箱'  =>  'require|email|unique',
        'password|密码'=> 'require|min:5|max:15|alphaNum|confirm',
        'mobile|手机号'=>  'require|mobile|unique'
    ];
}