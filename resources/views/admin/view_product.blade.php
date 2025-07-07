
  @include('admin.adheader')      
  <!-- --------------------------------------------------------From------------------------------------------- -->
  <!-- resources/views/admin/products/index.blade.php -->
      <div class="container text-center">
          <h1 class="mb-4">Product List</h1>

          <!-- Success Message -->
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          <!-- Buttons: Add Product & Download CSV -->
          <div class="d-flex justify-content-between mb-3">
              <a href="{{ route('admin.product_add') }}" class="btn btn-primary btn-sm"></a>
              <a href="{{ route('admin.export_csv') }}" class="btn btn-success btn-sm">Download CSV</a>
          </div>

          <!-- Product Table -->
          <div class="table-responsive d-flex justify-content-center">
              <table class="table table-sm table-bordered text-center w-75">
                  <thead class="thead-dark">
                      <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Size</th>
                          <th>Color</th>
                          <th>Image</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($products as $product)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $product->name }}</td>
                              <td class="text-truncate" style="max-width: 150px;">{{ $product->description }}</td>
                              <td>Rs{{ number_format($product->price, 2) }}</td>
                              <td>{{ $product->size }}</td>
                              <td>{{ $product->color }}</td>
                              <td>
                                  @if($product->image)
                                      <img src="{{ asset($product->image) }}" alt="Product Image" class="img-thumbnail" width="40">
                                  @else
                                      No image
                                  @endif
                              </td>
                              <td>
                                  <!-- Edit Icon Button -->
                                  <a href="{{ route('admin.edit_product', $product->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                      <i class="mdi mdi-pencil"></i>
                                  </a>

                                  <!-- Delete Icon Button -->
                                  <form action="{{ route('admin.product_delete', $product->id) }}" method="POST" style="display:inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this product?')">
                                          <i class="mdi mdi-delete"></i>
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>


  <!-- Download Bill Button -->
    </body>
  </html>
