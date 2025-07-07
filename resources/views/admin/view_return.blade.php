

 <!-- Or your main layout -->

@include('admin.adheader')

<div class="container d-flex justify-content-center my-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add left padding to card -->
    <div class="card shadow-lg p-4 rounded" style="width: 100%; max-width: 1010px; padding-left: 100px;">
    <h2 class="mb-4 text-center text-dark">ReturnExchange</h2>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center table-sm">
        <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Order Number</th>
                                    <th>Email</th>
                                    <th>Product Name</th>
                                    <th>Reason</th>
                                    <th>Request Type</th>
                                    <th>Details</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($return as $index => $req)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $req->customer_name }}</td>
                                        <td>{{ $req->order_number }}</td>
                                        <td>{{ $req->email }}</td>
                                        <td>{{ $req->product_name }}</td>
                                        <td>{{ $req->reason ?? '—' }}</td>
                                        <td class="text-capitalize">{{ $req->request_type }}</td>
                                        <td>{{ $req->details ?? '—' }}</td>
                                        <td>{{ $req->created_at->format('d M, Y h:i A') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
        </table>
    </div>
</div>
  </body>
</html>







