@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="page-wrapper active">
        <div class="content">
            <div class="row">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product List</h4>
                        <h6>Manage your products</h6>
                    </div>
                    <div class="page-btn">
                        <a href="/add_product" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                                class="me-1">Add New Product</a>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Data Product Terbaru</h4>
                        <div class="table-responsive">
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Id Product</th>
                                        <th>Name Product</th>
                                        <th>Kategori </th>
                                        <th>Price</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($data) --}}
                                    @php

                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $d->id }}</td>
                                            <td class="">
                                                <a href="javascript:void(0);">{{ $d->name_product }}</a>
                                            </td>
                                            <td>{{ $d->category->name_category }}</td>
                                            <td>{{ $d->price }}</td>
                                            <td>{{ $d->stok }}</td>
                                            <td>
                                                <a class="me-3" href="{{ route('edit_product', $d->id) }}">
                                                    <img src="assets/img/icons/edit.svg" alt="Edit">
                                                </a>
                                                <form method="POST" action="{{ url('delete_product', $d->id) }}"
                                                    data-confirm-d  elete="true" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link confirm-text">
                                                        <img src="assets/img/icons/delete.svg" alt="Delete">
                                                    </button>
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
        </div>
    </div>
    
@endsection


