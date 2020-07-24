<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Pasakums extends Model{
    protected $table = 'pasakumi';
    public $timestamps = false;



    public function users(){
        return $this->belongsToMany('App\User');
    }
}
