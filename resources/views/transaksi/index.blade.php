    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
        <meta name="keywords"
            content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dreams Pos admin template</title>

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/css/animate.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/plugins/owlcarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/plugins/owlcarousel/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/plugins/select2/css/select2.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">

        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    </head>

    <body>
        @include('layouts.navbar')
        <div class="page-wrapper ms-0">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 col-sm-12 tabs_wrapper">
                        <div class="page-header ">
                            <div class="page-title">
                                <div class="page-btn mb-4">
                                    <a href="/dashboard" class="btn btn-added">Back Bashboard</a>
                                </div>
                                <h4>Orders</h4>
                                <h6>Manage your purchases</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name Product</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($barang as $d)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td class="productimgname">
                                                        <a href="javascript:void(0);">{{ $d->nama_barang }}</a>
                                                    </td>
                                                    <td>{{ $d->harga }}</td>
                                                    <td>{{ $d->stok }}</td>
                                                    <td>
                                                        <a class="me-3" href="editquotation.html">
                                                            <img src="assets/img/icons/quotation1.svg" alt="img">
                                                        </a>
                                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 ">
                        <div class="order-list">
                            <div class="orderid">
                                <h4>Order List</h4>
                            </div>
                        </div>
                        <div class="card card-order">
                            <div class="card-body pt-0">
                                <div class="totalitem">
                                    <h4>Total items : {{ $cartItems ? count($cartItems) : 0 }}</h4>
                                    <a href="javascript:void(0);" onclick="clearCart()">Clear all</a>
                                </div>
                                <div class="product-table">
                                    <ul class="product-lists">
                                        @foreach ($cartItems as $cI)
                                            <li>
                                                <div class="productimg">
                                                    <div class="productcontet">
                                                        <h4>{{ $cI->barang->nama_barang }}
                                                            <a href="javascript:void(0);" class="ms-2"
                                                                data-bs-toggle="modal" data-bs-target="#edit"><img
                                                                    src="assets/img/icons/edit-5.svg"
                                                                    alt="img"></a>
                                                        </h4>
                                                        {{-- <div class="productlinkset">
                                                        <h5>PT001</h5>
                                                    </div> --}}
                                                        <div class="increment-decrement">
                                                            <div class="input-groups">
                                                                <input type="button" value="-"
                                                                    class="button-minus dec button">
                                                                <input type="text" name="child"
                                                                    value="{{ $cI->qty }}" class="quantity-field">
                                                                <input type="button" value="+"
                                                                    class="button-plus inc button ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>{{ $cI->barang->harga }} </li>
                                            <li><a class="confirm-text"
                                                    href="{{ route('removeFromCart', ['cart_id' => $cI->id]) }}"><img
                                                        src="assets/img/icons/delete-2.svg" alt="img"></a></li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                            <div class="split-card">
                            </div>
                            <div class="card-body pt-0 pb-2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="select-split ">
                                            <div class="form-group">
                                                <label>Di Bayar*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="select-split">
                                            <div class="form-group">
                                                <label>Kembalian*</label>
                                                <input type="text" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="setvalue">
                                        <ul>
                                            <li class="total-value">
                                                <h5>Total Belanja</h5>
                                                <h6>60.00$</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12">
                                        <form action="{{ route('processTransaction') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="paid" id="totalPaid">
                                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                                            <a href="{{ route('kategori') }}" class="btn btn-cancel">Cancel</a>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>

            <script src="{{ URL::to('assets/js/feather.min.js') }}"></script>

            <script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>

            <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>

            <script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}"></script>

            <script src="{{ URL::to('assets/plugins/select2/js/select2.min.js') }}"></script>

            <script src="{{ URL::to('assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

            <script src="{{ URL::to('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
            <script src="{{ URL::to('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

            <script src="{{ URL::to('assets/js/script.js') }}"></script>
    </body>

    </html>
