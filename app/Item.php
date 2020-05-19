<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //設定黑名單為空
    protected $guarded = [];

//設定白名單欄位
    //protected $fillable = ['title','price'...];
}
