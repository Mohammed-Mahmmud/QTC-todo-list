<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUserAction
{
    public function handle(array $data)
    {
        if (isset($data['image'])) {
            $image = $data['image'];
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('uploads/images', $imageName, 'public');
            $data['image'] = $imagePath;
        }

        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        return $user;
    }
}

