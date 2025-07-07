<!-- resources/views/admin/product_edit.blade.php -->!
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 @extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Edit Product</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Form -->
        <div class="card p-4">
            <form action="{{ route('admin.update_product', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                    <label>Price:</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>

                <div class="form-group">
                    <label>Size:</label>
                    <input type="text" name="size" class="form-control" value="{{ $product->size }}" required>
                </div>

                <div class="form-group">
                    <label>Color:</label>
                    <input type="text" name="color" class="form-control" value="{{ $product->color }}" required>
                </div>

                <div class="form-group">
                    <label>Image:</label><br>
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" alt="Product Image" width="100"><br><br>
                    @endif
                    <input type="file" name="image" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
                <a href="{{ route('admin.view_product') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection

 </body>
 </html>


