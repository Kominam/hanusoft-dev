<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Phase;

/**
 * Class PhaseTransformer
 * @package namespace App\Transformers;
 */
class PhaseTransformer extends TransformerAbstract
{

    /**
     * Transform the \Phase entity
     * @param \Phase $model
     *
     * @return array
     */
    public function transform(Phase $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
