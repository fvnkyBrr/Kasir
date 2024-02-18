@extends('layouts.app')

@section('content')
    <div class="page-wrapper active">
        <div class="content">
            <div class="row">
              <div class="page-header">
                    <div class="page-title">
                        <h4>Product List</h4>
                        <h6>Manage your products</h6>
                    </div>
                    <div class="page-btn">
                        <a href="{{ route('addproduct') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg"
                                alt="img" class="me-1">Add New Product</a>
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
                                        <th>Id barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori </th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PT001</td>
                                        <td class="">
                                            <a href="javascript:void(0);">Macbook pro</a>
                                        </td>
                                        <td>Computers</td>
                                        <td>30.000.000</td>
                                        <td>5</td>
                                        <td>
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
                                        <td>PT002</td>
                                        <td class="">
                                            <a href="javascript:void(0);">Orange</a>
                                        </td>
                                        <td>Fruits</td>
                                        <td>40.000</td>
                                        <td>10</td>
                                        
                                        <td>
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
                                        <td>PT003</td>
                                        <td class="">
                                            <a href="javascript:void(0);">Pineapple</a>
                                        </td>
                                        <td>Fruits</td>
                                        <td>100.000</td>
                                        <td>20</td>
                                        <td>
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
