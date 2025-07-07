@include('admin.adheader')  

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-4">Send Email</h3>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{--  Add enctype for file upload --}}
                <form action="{{ route('admin.emailForm') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message:</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>

                 
                    

                    <button type="submit" class="btn btn-primary w-100">Send Email</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
