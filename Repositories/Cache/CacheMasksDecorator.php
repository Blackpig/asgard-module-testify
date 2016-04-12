<?php namespace Modules\Testify\Repositories\Cache;

use Modules\Testify\Repositories\MasksRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMasksDecorator extends BaseCacheDecorator implements MasksRepository
{
    public function __construct(MasksRepository $masks)
    {
        parent::__construct();
        $this->entityName = 'testify.masks';
        $this->repository = $masks;
    }
}
