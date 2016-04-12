<?php namespace Modules\Testify\Repositories\Eloquent;

use Modules\Testify\Repositories\TestimonialsRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class EloquentTestimonialsRepository extends EloquentBaseRepository implements TestimonialsRepository
{

    /**
     * @param  int    $id
     * @return object
     */
    public function find($id)
    {
        return $this->model->with('masks')->find($id);
    }

    /**
    * @return \Illuminate\database\Eloquent\Collection
    */
    public function getRandom($count = 1)
    {
        return $this->model->orderByraw('RAND()')->take($count)->get();
    }

    /**
    * @param Array $data
    * @return Array
    */
    public function cleanTestimonial($data)
    {
        foreach (LaravelLocalization::getSupportedLocales() as $key=>$locale) {
            $data[$key]['testimonial'] = strip_tags($data[$key]['testimonial'], '<p>');
        }

        return $data;
    }

    /**
     * Update a resource
     * @param $testimonial
     * @param  array $data
     * @return mixed
     */
    public function update($testimonial, $data)
    {
        $data = $this->cleanTestimonial($data);

        $testimonial->update($data);

        return $testimonial;
    }

    /**
     * Create a blog post
     * @param  array $data
     * @return Post
     */
    public function create($data)
    {
        $data = $this->cleanTestimonial($data);

        $testimonial = $this->model->create($data);

        return $testimonial;
    }

}
