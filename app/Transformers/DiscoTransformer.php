<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Disco;

/**
 * Class DiscoTransformer.
 *
 * @package namespace App\Transformers;
 */
class DiscoTransformer extends TransformerAbstract
{
    /**
     * Transform the Disco entity.
     *
     * @param \App\Entities\Disco $model
     *
     * @return array
     */
    public function transform(Disco $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
