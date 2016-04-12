<?php namespace Modules\Testify\Events\Handlers\Masks;

use Modules\Testify\Repositories\MasksRepository;

class CheckIsDefault
{

    private $masksRepository;
    /**
    *
    *   Ensure that only one mask is set as the default
    *
    **/

    public function __construct(MasksRepository $masksRepository)
    {
        $this->masksRepository = $masksRepository;
    }

    public function handle($event)
    {
        if ($event->data['is_default']) {
            return $this->masksRepository->resetIsDefault($event->maskId);

        }
    }
}
