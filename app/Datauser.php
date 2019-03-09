<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datauser extends Model
{
    //
    protected $fillable=[
        'name', 'identitas', 'user_id'
    ];

    public function user(){
        return $this->belongsTo("App\User");
    }

}
