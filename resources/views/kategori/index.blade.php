@extends('layouts.app')

@section('content')
    <div class="page-wrapper active">
        <div class="content">
            <div class="row">
              <div class="page-header">
                    <div class="page-title">
                        <h4>Kategory List</h4>
                        <h6>Manage your products</h6>
                    </div>
                    <div class="page-btn">
                        <a href="{{ route('add_kategori') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg"
                                alt="img" class="me-1">Add New Kategori</a>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Data Kategori Terbaru</h4>
                        <div class="table-responsive">
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th class="text-center">Nama Kategory</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($data as $d)                                    
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="" style="padding-left: 10%;" >
                                            <a href="javascript:void(0);" >{{ $d->name_category }}</a>
                                        </td>
                                        <td class="text-center">
                                            <a  class="me-3" href="{{ route('edit_kategori', $d->id) }}">
                                                <img src="/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <form method="POST" action="{{ url('delete_kategori',$d->id) }}" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link confirm-text"  href="javascript:void(0);"  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    <img src="assets/img/icons/delete.svg" alt="Delete"/>
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
