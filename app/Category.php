<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'order'];

    /**
     * 正向模型关联 , 查询 category 对应 type 数据
     * @return mixed
     */
    public function types()
    {
        return $this->hasMany('App\Type','category_id', 'id');
    }

}
