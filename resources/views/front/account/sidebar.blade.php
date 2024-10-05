<div class="col-lg-3">
    <div class="card border-0 shadow mb-4 p-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="600">
        <div class="s-body text-center mt-3" >
            @if (Auth::user()->image != null)
                <img src="{{ asset('profile_pic/thumb/' . Auth::user()->image) }}" alt="user image"
                    class="rounded-circle img-fluid" style="width: 150px;">
            @else
                <img src="{{ asset('/images/avatar.jpg') }}" alt="avatar" class="rounded-circle img-fluid"
                    style="width: 150px;">
            @endif
            <h5 class="mt-3 pb-0 text-decoration-none">{{ Auth::user()->name }}</h5>
            <p class="text-muted mb-1 fs-6 text-decoration-none">{{ ucfirst(Auth::user()->role) }}</p>
            @if (Auth::user()->image != null)
                <div class="d-flex justify-content-center mb-2">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                        class="btn btn-primary text-decoration-none">Change Profile Picture</button>
                </div>
            @else
                <div class="d-flex justify-content-center mb-2">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                        class="btn btn-primary text-decoration-none">Upload Profile Picture</button>
                </div>
            @endif
        </div>
    </div>
    <div class="card account-nav border-0 shadow mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="300" data-aos-duration="600">
        <div class="card-body p-0">
            <ul class="list-group list-group-flush ">
                @if (Auth::user()->role == 'admin')
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('account.profile.admin.users') }}" class="text-decoration-none">Users Database</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('account.profile.admin.blog-edit') }}" class="text-decoration-none">Manage Blogs</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('account.profile.admin.portal') }}" class="text-decoration-none">Referral Code Management</a>
                    </li>
                @endif
                <li class="list-group-item d-flex justify-content-between p-3">
                    <a href="{{ route('account.profile') }}" class="text-decoration-none">Personal Identification</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="{{ route('account.profile.edu') }}" class="text-decoration-none">Education Details</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="{{ route('account.profile.prefrences') }}" class="text-decoration-none">Educational
                        Prefrences</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="{{ route('account.profile.uploadedFiles') }}" class="text-decoration-none">Uploaded Files</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="{{ route('account.profile.security') }}" class="text-decoration-none">Security</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="{{ route('account.logout') }}" class="text-decoration-none">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
