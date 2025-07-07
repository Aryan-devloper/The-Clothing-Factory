

@include('admin.adheader')

<div class="container d-flex justify-content-center my-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add left padding to card -->
    <div class="card shadow-lg p-4 rounded" style="width: 100%; max-width: 1010px; padding-left: 100px;">
    <h2 class="mb-4 text-center text-dark">Users</h2>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center table-sm">
        <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Image</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobail ?? 'N/A' }}</td>
                    <td>{{ $user->city }}</td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            @if ($user->image)
                                <img src="{{ asset($user->image) }}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <span>No Image</span>
                            @endif
                        </div>
                    </td>
                   
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
  </body>
</html>













