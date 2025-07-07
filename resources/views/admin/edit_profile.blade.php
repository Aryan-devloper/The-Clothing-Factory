@include('admin.adheader')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header bg-success text-white text-center">
                    <h4>Edit Admin Profile</h4>
                </div>
                
                
                <div class="card-body">
                    <form action="{{ route('admin.update_profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ session('admin_name') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" value="{{ session('admin_email') }}" required>
                        </div>

                      
                        
                        <div class="form-group mb-3">
                            <label> New Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Profile Image:</label>
                            <input type="file" name="image" class="form-control">
                            @if ($admin->image)
                                <img src="{{ asset(session('admin_image')) }}" class="mt-2" width="100">
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update Profile</button>
                            <a href="{{ route('admin.edit_profile') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
