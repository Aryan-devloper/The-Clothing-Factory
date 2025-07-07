@include('admin.adheader')
    <!-- ============================================================== -->
    <!-- Content -->  
    <!-- ============================================================== -->
     @if(session('admin_name'))
    <div class="container my-4">
      <!-- Center the form with Bootstrap grid system -->
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h1>Product Add</h1>
          <br>
          <form method="POST" action="{{ route('admin.product_add') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Product Name</label>
              <input type="text" class="form-control" name="name" id="name" required />
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="description" required></textarea>
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input
                type="number"
                class="form-control"
                name="price"
                id="price"
                step="0.01"
                required
              />
            </div>

            <div class="mb-3">
              <label for="size" class="form-label">Product Size</label>
              <input
                type="text"
                class="form-control"
                name="size"
                id="size"
                placeholder="S, M, L, XL"
                required
              />
            </div>

            <div class="mb-3">
              <label for="color" class="form-label">Product Color</label>
              <input type="text" class="form-control" name="color" id="color" required />
            </div>

            <div class="mb-3">
              <label for="image" class="form-label">Product Image</label>
              <input type="file" class="form-control" name="image" id="image" />
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!----------------------------------------------------------From close------------------------------------------- -->
@else
<script>
  window.location.href="{{url('/admin/authentication-login')}}"
  </script>
@endif
</body>
</html>
