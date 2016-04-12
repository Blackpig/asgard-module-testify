<?php namespace Modules\Testify\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Testimonials extends Model
{
    use Translatable, PresentableTrait;

    protected $table = 'testify__testimonials';
    protected $presenter = 'Modules\Testify\Presenters\TestimonialsPresenter';

    public $translatedAttributes = [
        'salutation',
        'job_title',
        'country',
        'testimonial'
    ];

    protected $fillable = [
        'salutation',
        'first_name',
        'last_name',
        'job_title',
        'company',
        'town',
        'state',
        'country',
        'testimonial',
        'mask_id'
    ];

    public function masks()
    {
        return $this->hasOne(Masks::class,'id','mask_id');
    }

}
