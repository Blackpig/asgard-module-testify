<?php namespace Modules\Testify\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface TestimonialsRepository extends BaseRepository
{

    /**
    * @return \Illuminate\database\Eloquent\Collection
    */
    public function getRandom();

    /**
    * @param Array $data
    * @return Array
    */
    public function cleanTestimonial($data);

}
