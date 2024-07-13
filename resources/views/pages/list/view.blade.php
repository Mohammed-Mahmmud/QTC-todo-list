@extends('master')
@section('title', 'ToDo List')
@section('listsActive', 'active')
@section('style')
@endSection
@section('content')
    <div class="content">
        <div class="row app-block">
            <div class="col-md-3 app-sidebar">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-secondary btn-block" data-toggle="modal" data-target="#newTaskModal">
                            New Task
                        </button>
                    </div>
                    <div class="app-sidebar-menu">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('list.index') }}" class="list-group-item active d-flex align-items-center"
                                onclick="filterTasks('all')">
                                <i data-feather="mail" class="mr-2 width-15 height-15"></i>
                                All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 app-content">
                <div class="app-content-overlay"></div>
                <div class="app-action">
                    <div class="action-left">
                        <ul class="list-inline">
                            <li class="list-inline-item mb-0">
                                <a href="" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                    Filter
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{ route('list.index') }}" class="dropdown-item">All</a>
                                    <form action="{{ route('list.filter', ['filter' => 'completed']) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="filter" value="completed">
                                        <button type="submit" class="dropdown-item">Completed</button>
                                    </form>

                                    <form action="{{ route('list.filter', ['filter' => 'pending']) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="filter" value="pending">
                                        <button type="submit" class="dropdown-item">Pending</button>
                                    </form>

                                </div>
                            </li>
                            <li class="list-inline-item mb-0">
                                <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                    Sort
                                </a>
                                <div class="dropdown-menu">
                                    <form action="{{ route('list.filter', ['sort' => 'asc']) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="sort" value="asc">
                                        <button type="submit" class="dropdown-item">Ascending</button>
                                    </form>
                                    <form action="{{ route('list.filter', ['sort' => 'desc']) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="sort" value="desc">
                                        <button type="submit" class="dropdown-item">Descending</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="action-right">
                        <form action="{{ route('list.filter') }}" method="POST" style="display:inline;">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Task search" name="search"
                                aria-describedby="button-addon1" id="taskSearch">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-light" type="button" id="button-addon1"
                                    type="submit">
                                    <i class="ti-search"></i>
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card card-body app-content-body">
                <div class="app-lists">
                    <ul class="list-group list-group-flush" id="taskList">
                        @foreach ($data as $item)
                            <li class="list-group-item task-list @if ($item->status == 'completed') active @endif">
                                <div class="mr-3">
                                    <a href="#" class="app-sortable-handle">
                                        <i data-feather="move" class="width-15 height-15"></i>
                                    </a>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                        <input type="checkbox" class="custom-control-input" id="{{ $item->title }}"
                                            @if ($item->status == 'completed') checked @endif disabled>
                                        <label class="custom-control-label" for="{{ $item->title }}"></label>
                                    </div>
                                </div>

                                <div class="flex-grow-1 min-width-0">
                                    <div class="mb-1 d-flex align-items-center justify-content-between">
                                        <div class="@if ($item->status == 'completed') app-list-title @endif text-truncate"
                                            style="color: black">{{ $item->title }}</div>
                                        <div
                                            style="@if ($item->status == 'completed') color:#28a745 @else color:red @endif">
                                            {{ $item->status }}</div>
                                        <div class="@if ($item->status == 'completed') app-list-title @endif"
                                            style="color:
                                                black">
                                            {{ $item->dueDate }}</div>
                                        <div class="@if ($item->status == 'completed') app-list-title @endif"
                                            class="pl-3 d-flex align-items-center">
                                            <button class="btn btn-white" data-toggle="modal"
                                                data-target="#editTaskModal{{ $item->id }}">
                                                <i class="fa fa-edit" style="font-size:20px;"></i>
                                            </button>
                                            {{-- edit model --}}
                                            <div class="modal fade" style="color: black"
                                                id="editTaskModal{{ $item->id }}" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit {{ $item->title }} Task</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <i class="ti-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form autocomplete="on"
                                                                action="{{ route('list.update', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Task
                                                                        title</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="title" value="{{ $item->title }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row row-sm">
                                                                    <label class="col-sm-3 col-form-label">Deadline</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="date" class="form-control "
                                                                            placeholder="Date" name="dueDate"
                                                                            value="{{ $item->dueDate }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control" name="status">
                                                                            @foreach (App\Models\ToDoList::STATUS as $status)
                                                                                <option value="{{ $status }}"
                                                                                    @if (isset($data) && $status == $item->status) selected="" @endif>
                                                                                    {{ $status }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-sm-3 col-form-label">Description</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" rows="6" name="description">{{ $item->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3"></label>
                                                                    <div class="col-sm-9">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end edit model --}}
                                            <form action="{{ route('list.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-white"
                                                    data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- end::app-lists -->
            </div>
        </div>
    </div>
    {{-- create new task --}}
    <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-hidden="true" style="color: black">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="on" action="{{ route('list.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Task title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="form-group row row-sm">
                            <label class="col-sm-3 col-form-label">Deadline</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control " placeholder="Date" name="dueDate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status">
                                    @foreach (App\Models\ToDoList::STATUS as $status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="6" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end create new task --}}
    </div>
@endsection
@section('scripts')

@endsection
