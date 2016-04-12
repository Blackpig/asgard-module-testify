<?php namespace Modules\Testify\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Testify\Composers\TestimonialsPageComposer;
use Modules\Testify\Composers\RandomTestimonialComposer;

class TestifyServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        view()->composer('index', RandomTestimonialComposer::class);
        view()->composer('testimonials', TestimonialsPageComposer::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Testify\Repositories\TestimonialsRepository',
            function () {
                $repository = new \Modules\Testify\Repositories\Eloquent\EloquentTestimonialsRepository(new \Modules\Testify\Entities\Testimonials());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Testify\Repositories\Cache\CacheTestimonialsDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Testify\Repositories\MasksRepository',
            function () {
                $repository = new \Modules\Testify\Repositories\Eloquent\EloquentMasksRepository(new \Modules\Testify\Entities\Masks());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Testify\Repositories\Cache\CacheMasksDecorator($repository);
            }
        );
// add bindings


    }
}
