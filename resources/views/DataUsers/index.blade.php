@extends('layouts.app')

@section('content')
    <div class="page-wrapper active">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Users List</h4>
                    <h6>Manage your Users</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('addusers') }}" class="btn btn-added">
                        <img src="assets/img/icons/plus.svg" alt="img" class="me-2"> Add User
                    </a>
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
                                    <tr>
                                        <td>1</td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product1.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook pro</a>
                                        </td>
                                        <td>PT001</td>
                                        <td>walk-in-customer</td>
                                        <td><span class="badges bg-lightgreen">Sent</span></td>
                                        <td>
                                            <a class="me-3" href="editquotation.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product2.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Orange</a>
                                        </td>
                                        <td>PT002</td>
                                        <td>walk-in-customer</td>
                                        <td><span class="badges bg-lightyellow">Ordered</span></td>
                                        <td>
                                            <a class="me-3" href="editquotation.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="assets/img/product/product4.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Stawberry</a>
                                        </td>
                                        <td>PT003</td>
                                        <td>walk-in-customer</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>
                                            <a class="me-3" href="editquotation.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
    @endsection
