<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $fillable =[ 'user_id',
       'titulo',
       'texto',
       'archivo',
       'fecha_de_publicacion',
       'created_at',];

    public function user(){
    	return $this->hasOne('User');
    }
}
