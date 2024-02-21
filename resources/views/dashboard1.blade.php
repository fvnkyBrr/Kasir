@extends('layouts.app')

@section('content')
    <div class="page-wrapper ">
        <div class="content">
            <div class="row">
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Data Transaksi Pejualan Terbaru</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Product Code</th>
                                        <th>Expiry Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="javascript:void(0);">IT0001</a></td>
                                        <td>12-12-2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="javascript:void(0);">IT0002</a></td>
                                        <td>25-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="javascript:void(0);">IT0003</a></td>
                                        <td>19-11-2022</td>
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
