@extends('layout.main')

@section('content')
    <main>
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
    @endsection
