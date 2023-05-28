@extends('layout.main')

@section('content')
    {{-- <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">user</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead class=" bg-secondary">
                            <tr>
                                <th>#</th>
                                <th>Aksi</th>
                                <th>Avatar</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                    <a class="btn btn-success" href="#">View</a>
                                </td>
                                <td>
                                    <img src="https://placehold.co/50x50" alt="avatar">
                                </td>
                                <td>Aan</td>
                                <td>aan@email.com</td>
                                <td>081234567890</td>
                                <td>Admin</td>

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                    <a class="btn btn-success" href="#">View</a>
                                </td>
                                <td>
                                    <img src="https://placehold.co/50x50" alt="avatar">
                                </td>
                                <td>Aan Bayu Saputra</td>
                                <td>aan@email.com</td>
                                <td>081234567890</td>
                                <td>Admin</td>

                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                    <a class="btn btn-success" href="#">View</a>
                                </td>
                                <td>
                                    <img src="https://placehold.co/50x50" alt="avatar">
                                </td>
                                <td>Eko Agung</td>
                                <td>agung@email.com</td>
                                <td>081234567890</td>
                                <td>Staff</td>

                            </tr>

                            <tr>
                                <td>4</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                    <a class="btn btn-success" href="#">View</a>
                                </td>
                                <td>
                                    <img src="https://placehold.co/50x50" alt="avatar">
                                </td>
                                <td>Irfan Afandi</td>
                                <td>irfan@email.com</td>
                                <td>081234567890</td>
                                <td>staff</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main> --}}
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">User</h1>

            <a href="{{ route('user.create') }}" class="btn btn-primary mb-2">Create User</a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="https://placehold.co/50x50" alt="avatar">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        <span
                                            class="badge  {{ $user->role->name == 'admin' ? 'bg-success' : 'bg-primary' }}">{{ $user->role->name }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            class="d-inline">
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
