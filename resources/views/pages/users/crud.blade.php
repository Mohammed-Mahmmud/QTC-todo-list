@extends('master')
@section('title', ucfirst('users'))
@section('newUserActive', 'active')
@section('style')
@endSection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="nav flex-lg-column flex-sm-row nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">
                                {{ $data->name ?? 'New' }} Account</a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method($method)
                                            @if ($type === 'edit')
                                                <div class="d-flex mb-3">
                                                    <figure class="mr-3">
                                                        <img width="100" class="rounded"
                                                            src="{{ asset('storage/' . $data->image) }}" alt="...">
                                                    </figure>
                                                    <div>
                                                        <p>{{ $data->name }}</p>
                                                        <p>{{ $data->email }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $data->name ?? '' }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="{{ $data->email ?? '' }}">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input name="password" class="form-control" type="password"
                                                            value="{{ $data->password ?? '' }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Information</h6>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Birt Date</label>
                                                        <input type="text" class="form-control" value="Roxana Roussell">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" value="+65195892151">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control"
                                                            value="http://laborasyon.com/">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Languages</label>
                                                        <input type="text" class="form-control"
                                                            value="http://laborasyon.com/">
                                                    </div>
                                                    <div class="form-group">
                                                        <p>Gender</p>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio1" name="customRadio"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="customRadio1">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio2" name="customRadio"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="customRadio2">Female</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio3" name="customRadio"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="customRadio3">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control"
                                                            value="A-65, Belvedere Streets">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Post Code</label>
                                                        <input type="text" class="form-control" value="1868">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" value="New York">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" class="form-control" value="New York">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <input type="text" class="form-control" value="United States">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Security</h6>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password Repeat</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Social</h6>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control"
                                                            value="https://twitter.com/roxana-roussell">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control"
                                                            value="https://www.facebook.com/roxana-roussell">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" class="form-control"
                                                            value="https://www.instagram.com/roxana-roussell/">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>GitHub</label>
                                                        <input type="text" class="form-control"
                                                            value="https://github.com/roxana-roussell">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
@section('script')
    <script src="{{ asset('dashboard') }}/demos/vendors/bundle.js"></script>
@endsection
