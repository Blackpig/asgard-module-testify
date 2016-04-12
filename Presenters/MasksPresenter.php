<?php namespace Modules\Testify\Presenters;

use Laracasts\Presenter\Presenter;
use Modules\Testify\Support\Traits\MasksTrait;

class MasksPresenter extends Presenter
{
    use MasksTrait;

    public function maskExample(){

        $data = new \stdClass();
        $data->salutation   = 'Mr.';
        $data->first_name   = "John";
        $data->last_name    = "Doe";
        $data->job_title    = "Position";
        $data->company      = "Company";
        $data->town         = "Town";
        $data->state        = "County";
        $data->country      = "Country";

        return $this->applyMask($this->mask, $data);

    }
}
