<?php

namespace App\Actions\List;

use App\Models\ToDOList;

class StoreListAction
{
    public function handle(array $data)
    {
        $data = ToDOList::create($data);
        return $data;
    }
}
