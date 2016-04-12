<?php namespace Modules\Testify\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Masks extends Model
{
    use PresentableTrait;

    protected $table = 'testify__masks';
    protected $presenter = 'Modules\Testify\Presenters\MasksPresenter';

    protected $fillable = [
            'title',
            'mask',
            'is_default'
        ];

    protected $casts = [
        'mask' => 'array',
        ];

    public function scoperesetIsDefault($query, $id)
    {
        return $query->where('is_default', '=', 1)->where('id', '<>', $id);
    }
}
