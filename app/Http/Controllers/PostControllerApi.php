<?php

namespace App\Http\Controllers;

use App\Http\Transformers\PostTrasformer;
use App\Http\Transformers\UserTransformer;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Fractalistic\Fractal;
use App\Models\Post\Post;
use League\Fractal\Manager;


class PostControllerApi extends Controller
{
    public function index(){

        $manager = new Manager();
        $fractal=new Fractal($manager);
        return $fractal->collection(User::all(),new UserTransformer());

    }
}
