
@include('admin.adheader')

<div class="container d-flex justify-content-center my-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add left padding to card -->
    <div class="card shadow-lg p-4 rounded" style="width: 100%; max-width: 1010px; padding-left: 100px;">
    <h2 class="mb-4 text-center text-dark">Contact Us</h2>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center table-sm">
            <thead class="table-light">
                <tr>
              
                
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Message</th>
                            <th>Submitted At</th>            
                </tr>
            </thead>
            <tbody>
            @foreach($contact as $index => $c)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $c->fullname }}</td>
                                <td>{{ $c->email }}</td>
                                <td>{{ $c->contact }}</td>
                                <td>{{ $c->message }}</td>
                                <td>{{ $c->created_at->format('d M, Y h:i A') }}</td>
                            </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
</div>
  </body>
</html>












