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
                        <a href="{{ route('addKategori') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg"
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
                                    <tr>
                                        <td>1</td>
                                        <td class="productimgname" style="padding-left: 10%;">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product1.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook pro</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="productimgname" style="padding-left: 10%;">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product2.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Orange</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="productimgname" style="padding-left: 10%;">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product3.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Pineapple</a>
                                        </td>
                                        
                                        <td class="text-center">
                                            <a class="me-3" href="product-details.html">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
