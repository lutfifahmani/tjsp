<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //

protected $dates = [
        'tanggal',
    ];

//restricts columns from modifying
  protected $guarded = [];

  
  // returns the instance of the user who is author of that post
  public function perusahaannya()
  {
    return $this->belongsTo('App\Perusahaan', 'id_perusahaan');
  }

  // user has many posts
          public function galleries()
          {
            return $this->hasMany('App\Gallery', 'id_laporan');
          }
}
