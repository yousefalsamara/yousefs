<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class YousefPost extends Model
{
    //
    use SoftDeletes;
    protected $table="yousefpost";

    protected $fillable=['titlre','des'];

}
