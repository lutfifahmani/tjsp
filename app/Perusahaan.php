<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //

     protected $table = 'companies';


       // user has many posts
          public function reports()
          {
            return $this->hasMany('App\Report', 'id_perusahaan');
          }
}
