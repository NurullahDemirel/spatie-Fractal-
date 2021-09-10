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
            'id'      => (int) $post->id,
            'title'   => $post->body,
            'country_id'=>$post->country_id,
            'country_name'=>Country::find($post->country_id)->name
        ];
    }


}
