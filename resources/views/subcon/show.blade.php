
<div class="container-fluid px-4">
    <h1 class="mt-4">Subcontent</h1><a class="btn btn-success" href="users/create">add user</a>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Users Data</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable 
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td><img src="{{ Storage::url($d->image) }}" class="rounded text-center" width="30"></td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->phone}}</td>
                        <td><a href="{{ route('users.edit', $d) }}">Edit</a>
                        <form action="{{ route('users.destroy', $d) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?');" >
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
