<?php

namespace App\Presenters;

use App\Transformers\UserDiscoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserDiscoPresenter.
 *
 * @package namespace App\Presenters;
 */
class UserDiscoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserDiscoTransformer();
    }
}
