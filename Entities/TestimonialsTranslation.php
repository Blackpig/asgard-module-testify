<?php namespace Modules\Testify\Entities;

use Illuminate\Database\Eloquent\Model;

class TestimonialsTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'salutation',
        'job_title',
        'country',
        'testimonial',
        'locale',
        'testimonials_id'
    ];
    protected $table = 'testify__testimonials_translations';
}
