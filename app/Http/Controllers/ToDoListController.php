<?php

namespace App\Http\Controllers;

use App\Actions\List\StoreListAction;
use App\Actions\List\UpdateListAction;
use App\Http\Requests\ListRequest;
use App\Models\ToDOList;
use Exception;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $data = ToDOList::get();
            return view('pages.list.view', compact('data'));
            return redirect()->route('list.index')->with('success', 'Data Added Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListRequest $request)
    {
        try {
            app(StoreListAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('list.index')->with('success', 'Data Added Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListRequest $request, string $id)
    {
        try {
            $list = ToDOList::FindOrFail($id);
            app(UpdateListAction::class)->handle($list, $request->validationUpdate()->validated());
            return redirect()->route('list.index')->with('success', 'Data Updated Successfully');
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
            ToDOList::FindOrFail($id)->delete();
            return redirect()->back()->with('error', 'Data Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    // public function filter(Request $request)
    // {
    //     try {
    //         $search = $request->query('search');
    //         $filter = $request->query('filter');
    //         $sort = $request->query('sort');
    //         $query = ToDoList::query();

    //         if ($filter) {
    //             $query->where('status', $filter);
    //         }
    //         if ($search) {
    //             $query->whereAny(
    //                 [
    //                     'title',
    //                     'description',
    //                     'dueDate',
    //                 ],
    //                 'LIKE',
    //                 "%$search%"
    //             );
    //         }
    //         if ($sort) {
    //             $query->orderBy('dueDate', $sort);
    //         }

    //         $data = $query->get();

    //         return view('pages.list.view', compact('data'));
    //     } catch (Exception $e) {
    //         return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    //     }
    // }
    public function filter(Request $request)
    {
        try {
            $search = $request->input('search');
            $filter = $request->input('filter');
            $sort = $request->input('sort');
            $query = ToDoList::query();

            if ($filter) {
                $query->where('status', $filter);
            }
            if ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', "%$search%")
                        ->orWhere('description', 'LIKE', "%$search%")
                        ->orWhere('dueDate', 'LIKE', "%$search%");
                });
            }
            if ($sort) {
                $query->orderBy('dueDate', $sort);
            }

            $data = $query->get();

            return view('pages.list.view', compact('data'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
