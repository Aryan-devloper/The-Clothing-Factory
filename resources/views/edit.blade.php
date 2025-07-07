<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Add Bootstrap CSS (Optional for responsive design) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }
        .container {
            margin-top: 50px;
        }
        .bg-light {
            background-color: #ffffff !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }
        .text-primary {
            color: #007bff !important;
        }
        .form-floating input, .form-floating select {
            height: 45px;
            font-size: 1rem;
        }
        .form-group input[type="file"] {
            height: auto;
        }
        .alert {
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        .form-floating label {
            font-size: 1.1rem;
        }
        .image-preview {
            margin-top: 15px;
            border-radius: 5px;
        }
        .text-center {
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .container {
                margin-top: 30px;
            }
            .col-lg-6, .col-lg-12 {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="bg-light p-5 rounded h-100 shadow">
                <h4 class="text-primary mb-5 text-center">Edit Profile</h4>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('update', ['id' => $user->id]) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('POST')
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" name="name" value="{{ old('name', $user->name) }}" required>
                                <label>Full Name</label>
                                @error('name')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" name="email" value="{{ old('email', $user->email) }}" required>
                                <label>Email</label>
                                @error('email')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0" name="password" placeholder="Leave empty to keep current">
                                <label>New Password</label>
                                @error('password')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="file" name="image" class="form-control border-0">
                                @error('image')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                @if ($user->image)
                                    <p class="mt-2">Current Image:</p>
                                <img src="{{ asset('images/' . $user->image) }}" height="50px" alt="User Image" class="image-preview">
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Update Profile</button>
                            <p class="mt-4 text-center"><a href="{{ url('homepage') }}">Back to Home</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
