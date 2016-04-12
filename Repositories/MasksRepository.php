<?php namespace Modules\Testify\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface MasksRepository extends BaseRepository
{
    /**
     * Reset Existing default mask
     * @param integer $id
     */
    public function resetIsDefault($id);

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list();

}
