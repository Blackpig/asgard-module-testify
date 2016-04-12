<?php namespace Modules\Testify\Presenters;

use Laracasts\Presenter\Presenter;
use Modules\Testify\Support\Traits\MasksTrait;

class TestimonialsPresenter extends Presenter
{
    use MasksTrait;

    /**
     * @return string
     */
    public function fullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function attribution()
    {
        return $this->applyMask($this->masks->mask, $this);
    }
}
