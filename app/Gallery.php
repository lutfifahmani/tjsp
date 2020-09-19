<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

	  protected $fillable = [
        'id_laporan','url'
    ];

    public function report()
  {
    return $this->belongsTo('App\Report', 'id_laporan');
  }
}
