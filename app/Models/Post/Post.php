<?php

namespace App\Models\Post;

use App\Models\Country\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
