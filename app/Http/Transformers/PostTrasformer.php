<?php


namespace App\Http\Transformers;
use App\Models\Country\Country;
use League\Fractal\TransformerAbstract;
use App\Models\Post\Post;


class PostTrasformer extends TransformerAbstract
{


    public function transform(Post $post)
    {

        return [
            'country_id'=>$post->country_id,
            'title'   => $post->body,
            'Country Name'=>$post->country->name
        ];
    }


}
