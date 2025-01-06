
<div class="container-fluid px-4 mt-5">
    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h4 class="text-center mb-3 text-decoration-underline">User Page</h4>
        <div class="row">
        <div class="mb-3 col-6">
            <img src="{{ Storage::url($user->image) }}" class="rounded text-center" width="30">
          <label class="form-label">Image</label>
          <input type="file" name="image" class="form-control" >
          @error('image')  <div class="text-danger">{{ $message }}</div>                 
          @enderror
        </div>
        <div class="mb-3 col-6">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" >
            @error('name')  <div class="text-danger">{{ $message }}</div>                 
            @enderror
        </div>
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" >
            @error('email')  <div class="text-danger">{{ $message }}</div>                 
            @enderror
        </div>
        <div class="mb-3 col-6">
          <label class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control" value="{{$user->phone}}" >
          @error('phone')  <div class="text-danger">{{ $message }}</div>                 
          @enderror
        </div>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
