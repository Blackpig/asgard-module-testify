<?php namespace Modules\Testify\Repositories\Cache;

use Modules\Testify\Repositories\TestimonialsRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTestimonialsDecorator extends BaseCacheDecorator implements TestimonialsRepository
{
    public function __construct(TestimonialsRepository $testimonials)
    {
        parent::__construct();
        $this->entityName = 'testify.testimonials';
        $this->repository = $testimonials;
    }
}
