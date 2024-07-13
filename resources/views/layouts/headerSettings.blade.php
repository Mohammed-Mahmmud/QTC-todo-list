<div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
        <div class="py-4 text-center" data-backround-image="{{ asset('dashboard') }}/demos/assets/media/image/image1.jpg">
            <figure class="avatar avatar-lg mb-3 border-0">
                @if (auth()->user()->image)
                    <img src="{{ asset('storage/' . auth()->user()->image ?? 'dashboard/demos/assets/media/image/user/women_avatar3.jpg') }}"
                        class="rounded-circle" alt="image">
                @else
                    <img src="{{ asset('dashboard/demos/assets/media/image/user/women_avatar3.jpg') }}"
                        class="rounded-circle" alt="image">
                @endif
            </figure>
            <h5 class="d-flex align-items-center justify-content-center">{{ Auth::user()->name }}</h5>
            <div>
                Email: <strong>{{ Auth::user()->email }}</strong>
            </div>
        </div>
        <div class="card mb-0 card-body shadow-none">
            <div class="mb-4">
                <div class="list-group list-group-flush">
                    <a href="{{ route('user.edit', Auth::user()->id) }}" class="list-group-item p-l-r-0">Profile</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="list-group-item p-l-r-0 text-danger">Sign Out!</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- END: User Menu -->
</div>
