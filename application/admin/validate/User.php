<?php
namespace app\admin\validate;
use think\Validate;
class User extends Validate
{
    protected $rule =   [
        'username'  => 'require|unique:user',
        'email'  => 'unique:user',
        'mobile_phone'  => 'unique:user',
        'points'   => 'number',   
    ];
    
    protected $message  =   [
        'username.require' => '用户名称必须',
        'username.unique'     => '用户名称不能重复',
        'email.unique'     => '邮箱不能重复',
        'mobile_phone.unique'     => '手机号不能重复',
        'points.number'=>'积分必须为数值'
    ];


}