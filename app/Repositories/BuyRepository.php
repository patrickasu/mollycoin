<?php

namespace App\Repositories;

use App\Models\Buy;
use App\Repositories\BaseRepository;

/**
 * Class BuyRepository
 * @package App\Repositories
 * @version August 11, 2020, 9:48 pm UTC
*/

class BuyRepository extends BaseRepository
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
        return Buy::class;
    }
}
