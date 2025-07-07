@include('admin.adheader')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Admin Profile</h4>
                </div>

                <div class="card-body text-center">
                    @if ($admin->image)
                        <img src="{{ asset($admin->image) }}" alt="Profile Image" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    @else
                        <img src="{{ asset('default-user.png') }}" alt="Default Image" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    @endif

                    <h5>{{ session('admin_name') }}</h5>
                    <p> <strong>Email:</strong>{{ session('admin_email') }}</p>
                 </div> 

                <div class="card-footer text-center">
                    <a href="{{ route('admin.edit_profile') }}" class="btn btn-warning btn-sm">Edit Profile</a>
                </div>  
                
            </div>

        </div>
    </div>
</div>
