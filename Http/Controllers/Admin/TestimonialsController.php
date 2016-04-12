<?php namespace Modules\Testify\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Modules\Testify\Entities\Masks;
use Modules\Testify\Entities\Testimonials;
use Modules\Testify\Repositories\MasksRepository;
use Modules\Testify\Repositories\TestimonialsRepository;
use Modules\Testify\Http\Requests\EditTestimonialRequest;
use Modules\Testify\Http\Requests\CreateTestimonialRequest;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TestimonialsController extends AdminBaseController
{
    /**
     * @var TestimonialsRepository
     */
    private $testimonials;

    /**
     * @var MasksRepository
     */
    private $masks;

    public function __construct(TestimonialsRepository $testimonials, MasksRepository $masks)
    {
        parent::__construct();

        $this->testimonials = $testimonials;
        $this->masks = $masks;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $testimonials = $this->testimonials->all();

        return view('testify::admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $masks = $this->masks->list();

        return view('testify::admin.testimonials.create',compact('masks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(CreateTestimonialRequest $request)
    {
        $this->testimonials->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('testify::testimonials.title.testimonials')]));

        return redirect()->route('admin.testify.testimonials.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Testimonials $testimonials
     * @return Response
     */
    public function edit(Testimonials $testimonials)
    {
         $masks = $this->masks->list();

        return view('testify::admin.testimonials.edit', compact('testimonials','masks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Testimonials $testimonials
     * @param  Request $request
     * @return Response
     */
    public function update(Testimonials $testimonials, EditTestimonialRequest $request)
    {
        $this->testimonials->update($testimonials, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('testify::testimonials.title.testimonials')]));

        return redirect()->route('admin.testify.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Testimonials $testimonials
     * @return Response
     */
    public function destroy(Testimonials $testimonials)
    {
        $this->testimonials->destroy($testimonials);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('testify::testimonials.title.testimonials')]));

        return redirect()->route('admin.testify.testimonials.index');
    }
}
