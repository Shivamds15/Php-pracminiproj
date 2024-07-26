<?php

namespace App\Repositories;

use App\Models\FormData;

class FormDataRepository implements FormDataRepositoryInterface
{
    public function create(array $data)
    {
        return FormData::create($data);
    }
}
