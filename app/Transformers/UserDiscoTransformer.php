<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserDisco;

/**
 * Class UserDiscoTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserDiscoTransformer extends TransformerAbstract
{
    /**
     * Transform the UserDisco entity.
     *
     * @param \App\Entities\UserDisco $model
     *
     * @return array
     */
    public function transform(UserDisco $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
