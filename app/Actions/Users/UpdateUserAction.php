<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UpdateUserAction
{

    public function handle(User $user, array $data)
    {
        if (isset($data['image'])) {
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $image = $data['image'];
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('uploads/images', $imageName, 'public');
            $data['image'] = $imagePath;
        }
        $data['password'] = Hash::make($data['password']);
        $user->update($data);
        return $user;
    }
}
