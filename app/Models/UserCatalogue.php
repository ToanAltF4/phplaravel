<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCatalogue extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'publish',
        'description'
    ];

    protected $table = 'user_catalogues'; 

    public function districts(){
        return $this -> hasMany(User::class,'user_catalogue_id','id');
    }
}
