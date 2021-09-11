<?php


namespace App\Http\Transformers;
use App\Models\Post\Post;
use App\Models\User;
use League\Fractal\TransformerAbstract;


class UserTransformer extends TransformerAbstract
{
    protected $defaultIncludes=['posts'];
    public function transform(User $user)
    {
        return [
            'id'      => (int) $user->id,
            'name'   => $user->name,
            'country'=>$user->myCountry->name
        ];
    }
    public function includePosts(User $user){
        $posts=$user->posts;

        return $this->collection($posts,New PostTrasformer());
    }

}
