<?php namespace Modules\Testify\Repositories\Eloquent;

use Modules\Testify\Events\MaskWasCreated;
use Modules\Testify\Events\MaskWasUpdated;
use Modules\Testify\Repositories\MasksRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentMasksRepository extends EloquentBaseRepository implements MasksRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list()
    {
        if (method_exists($this->model, 'translations')) {
            return $this->model->with('translations')
                ->orderBy('is_default', 'DESC')
                ->orderBy('title', 'ASC')
                ->get();
        }

        return $this->model
                ->orderBy('is_default', 'ASC')
                ->orderBy('title', 'ASC')
                ->get();
    }

    /**
     * Update a resource
     * @param $mask
     * @param  array $data
     * @return mixed
     */
    public function update($mask, $data)
    {
        $mask->update($data);

        event(new MaskWasUpdated($mask->id, $data));

        return $mask;
    }

    /**
     * Create a blog post
     * @param  array $data
     * @return Post
     */
    public function create($data)
    {
       $mask = $this->model->create($data);

        event(new MaskWasCreated($mask->id, $data));

        return $mask;
    }

    /**
     * Reset Existing default mask
     * @param integer $id
     */
    public function resetIsDefault($id)
    {
        return $this->model
            ->resetIsDefault($id)
            ->update(['is_default' => 0]);
    }
}
