<?php

namespace App\Http\Controllers;


use App\Http\Transformers\UserTransformer;
use App\Models\User;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;


class PostControllerApi extends Controller
{
    public function index(){

        $fractal = new Manager();
        $resource = new Collection(User::with('posts','myCountry')->get(), new UserTransformer());
        return $array = $fractal->createData($resource)->toArray();
    }
    public function getAll(){
        $fractal = new Manager();
        $resource = new Collection(User::with('posts.country','myCountry')->get(), new UserTransformer());
        $array = $fractal->createData($resource)->toArray();
        return view('index',compact('array'));
    }
}
