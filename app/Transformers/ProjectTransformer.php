<?php

namespace App\Transformers;

use App\Models\Project;
use League\Fractal\TransformerAbstract;

/**
 * Class ProjectTransformer
 * @package namespace App\Transformers;
 */
class ProjectTransformer extends TransformerAbstract
{

    /**
     * Transform the \Project entity
     * @param \Project $model
     *
     * @return array
     */
    public function transform(Project $model)
    {
        $image = $model->image;
        return [
            'id'              => (int) $model->id,

            /* place your other model properties here */
            'name'            => $model->name,
            'slug'            => $model->slug,
            'description'     => $model->description,
            'type'            => $model->type,
            'planStartDate'   => $model->plan_start_date,
            'actualStartDate' => $model->actual_start_date,
            'planEndDate'     => $model->plan_end_date,
            'actualEndDate'   => $model->actual_end_date,
            'mainImg'         => $image['main'],
            'subImage'        => $image['sub'],
            'created_at'      => $model->created_at,
            'updated_at'      => $model->updated_at,
        ];
    }
}
