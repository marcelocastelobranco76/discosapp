<?php

namespace App\Presenters;

use App\Transformers\DiscoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class DiscoPresenter.
 *
 * @package namespace App\Presenters;
 */
class DiscoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DiscoTransformer();
    }
}
