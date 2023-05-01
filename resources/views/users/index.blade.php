<x-app-layout>
    @section('content')

    <h1 class="mb-3">User Management</h1>

    <div class="bg-light p-4 rounded">
        <h1>Users</h1>
        <div class="lead">
            Manage your users here.
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Email</th>
                <th scope="col" width="10%">Username</th>
                <th scope="col" width="10%">Roles</th>
                <th scope="col" width="1%" colspan="3"></th>    
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            <form method="DELETE" action="{{ route('users.destroy', $user->id) }}" style='display:inline'>
                                @csrf
                            {{-- <div>
                                    
                                    <x-text-input id="username" class="form-control" type="string" name="username" :value="old('username')" placeholder="Username" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div> --}}
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button  class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </div>
                                </div>
                            </form>

                           
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>

    </div>
@endsection

</x-app-layout>