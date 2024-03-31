@extends('layouts.app')

@section('content')
    <div class="page-wrapper active">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Users List</h4>
                    <h6>Manage your Users</h6>
                </div>
                
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>User Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="">
                                            <a href="javascript:void(0);">{{ $u->name }}</a>
                                        </td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->jenis_kelamin }}</td>
                                        <td><span class="badges bg-lightgreen">{{ $u->role }}</span></td>
                                        <td>
                                            <a class="me-3" href="{{ route('edit_user', $u->id) }}">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <form method="POST" action="{{ url('delete_user', $u->id) }}" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link confirm-text" href="javascript:void(0);"
                                                    onclick="return confirm('Apakah Anda ingin menghapus data ini?');">
                                                    <img src="assets/img/icons/delete.svg" alt="Delete" /> </button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
