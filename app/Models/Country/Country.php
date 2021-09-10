<?php

namespace App\Models\Country;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function users(){
        return $this->hasMany(User::class,'country_id');
    }
}
