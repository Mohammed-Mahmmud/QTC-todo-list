<?php

namespace App\Actions\List;

use App\Models\ToDOList;
use Illuminate\Support\Facades\App;

class UpdateListAction
{

    public function handle(ToDOList $list, array $data)
    {
        $list->update($data);
        return $list;
    }
}
