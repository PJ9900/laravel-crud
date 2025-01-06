
<div class="container-fluid px-4 mt-5">
    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
        <h4 class="text-center mb-3 text-decoration-underline">Subcont Page</h4>
        <div class="row">
        <div class="mb-3 col-6">
          <label class="form-label">Image</label>
          <input type="file" name="image" class="form-control" >
          @error('image')  <div class="text-danger">{{ $message }}</div>                 
          @enderror
        </div>
        <div class="mb-3 col-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" >
            @error('email')  <div class="text-danger">{{ $message }}</div>                 
            @enderror
        </div>
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label class="form-label">phone</label>
            <input type="text" name="phone" class="form-control" >
            @error('phone')  <div class="text-danger">{{ $message }}</div>                 
            @enderror
        </div>
        <div class="mb-3 col-6">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" >
          @error('name')  <div class="text-danger">{{ $message }}</div>                 
          @enderror
        </div>
        <div class="mb-3 col-6">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" >
          @error('password')  <div class="text-danger">{{ $message }}</div>                 
          @enderror
        </div>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

