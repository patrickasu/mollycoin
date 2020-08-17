<?php

namespace App\Repositories;

use App\Models\Sell;
use App\Repositories\BaseRepository;

/**
 * Class SellRepository
 * @package App\Repositories
 * @version August 11, 2020, 9:51 pm UTC
*/

class SellRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'amount'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sell::class;
    }
}
