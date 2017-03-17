<?php

namespace App\Presenters;

use App\Transformers\PhaseTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PhasePresenter
 *
 * @package namespace App\Presenters;
 */
class PhasePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PhaseTransformer();
    }
}
