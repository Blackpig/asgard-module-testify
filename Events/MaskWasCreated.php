<?php namespace Modules\Testify\Events;

class MaskWasCreated
{
    /**
     * @var array
     */
    public $data;
    /**
     * @var int
     */
    public $MaskId;

    public function __construct($maskId, array $data)
    {
        $this->data = $data;
        $this->maskId = $maskId;
    }
}
