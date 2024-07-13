<?php

namespace App\ViewModels\UserView;

use App\Models\User;
use Spatie\ViewModels\ViewModel;

class UserViewModel extends ViewModel
{
    public $data;
    public $type;

    public function __construct($data = null)
    {
        $this->data = is_null($data) ? new User(old()) : $data;
        $this->type = is_null($data) ? 'create' : 'edit';
    }
     public function action() : string
    {
        return is_null($this->data->id)
        ? route('user.store')
        : route('user.update', $this->data->id);

    }

    public function method(): string
    {
        return is_null($this->data->id)
            ? 'POST' : 'PUT';
    }
}
