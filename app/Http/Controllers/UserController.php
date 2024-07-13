<?php

namespace App\Http\Controllers;

use App\Actions\Users\StoreUserAction;
use App\Actions\Users\UpdateUserAction;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\ViewModels\UserView\UserViewModel;
use Exception;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = User::get();
            return view('pages.users.view', compact('data'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('pages.users.crud', new UserViewModel());
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // app(StoreUserAction::class)->handle($request->validationStore()->validated());
        try {
            app(StoreUserAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('user.index')->with('success', 'User Data Added Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $data = User::FindOrFail($id);
            return view('pages.users.crud', new UserViewModel($data));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        try {
            $user = User::FindOrFail($id);
            app(UpdateUserAction::class)->handle($user, $request->validationUpdate()->validated());
            return redirect()->route('user.index')->with('success', 'User Data Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::FindOrFail($id);
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $user->delete();
            return redirect()->back()->with('error', 'User Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
