<?php namespace Modules\Testify\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Testify\Entities\Masks;
use Modules\Testify\Repositories\MasksRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MasksController extends AdminBaseController
{
    /**
     * @var MasksRepository
     */
    private $masks;

    public function __construct(MasksRepository $masks)
    {
        parent::__construct();

        $this->masks = $masks;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $masks = $this->masks->all();

        return view('testify::admin.masks.index', compact('masks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('testify::admin.masks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->masks->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('testify::masks.title.masks')]));

        return redirect()->route('admin.testify.masks.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Masks $masks
     * @return Response
     */
    public function edit(Masks $masks)
    {
        return view('testify::admin.masks.edit', compact('masks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Masks $masks
     * @param  Request $request
     * @return Response
     */
    public function update(Masks $masks, Request $request)
    {
        $this->masks->update($masks, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('testify::masks.title.masks')]));

        return redirect()->route('admin.testify.masks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Masks $masks
     * @return Response
     */
    public function destroy(Masks $masks)
    {
        $this->masks->destroy($masks);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('testify::masks.title.masks')]));

        return redirect()->route('admin.testify.masks.index');
    }
}
