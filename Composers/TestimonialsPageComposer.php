<?php namespace Modules\Testify\Composers;

use Illuminate\Contracts\View\View;
use Modules\Testify\Repositories\TestimonialsRepository;

class TestimonialsPageComposer
{
    public function __construct(TestimonialsRepository $testimonials)
    {
        $this->testimonials = $testimonials;
    }

    public function compose(View $view)
    {
        $view->with('testimonials', $this->testimonials->all());
    }
}
