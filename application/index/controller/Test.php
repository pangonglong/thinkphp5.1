<?php

namespace app\index\controller;

use app\common\controller\Base;

class Test extends Base
{
    public function test1()
    {
        $data = [
            'name' => 'pgl',
            'email'=> '123@qq.com',
            'password' => '123456',
            'mobile'=>'13855684561'
        ];
        $rule = 'app\common\validate\User';
        return $this->validate($data, $rule);
    }
}