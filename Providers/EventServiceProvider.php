<?php namespace Modules\Testify\Providers;

use Modules\Testify\Events\MaskWasCreated;
use Modules\Testify\Events\MaskWasUpdated;
use Modules\Testify\Events\Handlers\Masks\CheckIsDefault;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        MaskWasCreated::class => [
            CheckIsDefault::class,
        ],

        MaskWasUpdated::class => [
            CheckIsDefault::class,
        ],
    ];
}
