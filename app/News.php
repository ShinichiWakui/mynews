<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  //以下は元々記述が無かったので追加した
  protected $guarded = array('id');
    // 以下を追記
    public static $rules = array(
      'title' => 'required',
      'body' => 'required',
      );
}