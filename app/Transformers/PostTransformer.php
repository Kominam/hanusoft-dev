<?php

namespace App\Transformers;

use App\Models\Post;
use League\Fractal\TransformerAbstract;

/**
 * Class PostTransformer
 * @package namespace App\Transformers;
 */
class PostTransformer extends TransformerAbstract
{

    /**
     * Transform the \Post entity
     * @param \Post $model
     *
     * @return array
     */
    public function transform(Post $model)
    {
        return [
            'id'         => (int) $model->id,
            'title'      => $model->title,
            'content'    => $model->content,
            'slug'       => $model->slug,
            'category'   =>
            [
                'name' => $model->category->name,
                'slug' => $model->category->slug,
            ],
            'author'     =>
            [
                'name'         => $model->user->name,
                'email'        => $model->user->email,
                'gender'       => $model->user->gender,
                'address'      => $model->user->address,
                'bio'          => $model->user->bio,
                'phone'        => $model->user->phone,
                'birthday'     => $model->user->birthday,
                'facebook'     => $model->user->facebook,
                'gmail'        => $model->user->gmail,
                'github'       => $model->user->github,
                'avatar_image' => $model->user->avatar_image,
                'major'        => $model->user->major,
                'grade'        => $model->user->grade,
            ],
            'comments'   => $model->comments,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
