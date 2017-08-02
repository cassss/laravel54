<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
//表 -> posts
class Model extends BaseModel
{
    //不可注入数据字段
    protected $guarded = [];
}
