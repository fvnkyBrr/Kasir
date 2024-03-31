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
        <title>!!!</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">

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
                                <h4>Orders</h4>
                                <h6>Manage your purchases</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-top">
                                    <div class="search-set">
                                        <div class="search-input">
                                            <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  datanew">
                                        <thead style="font-size: 14px;">
                                            <tr class="text-center">
                                                <td>No.</td>
                                                <td>Id Product</td>
                                                <td>Name Product</td>
                                                <td>Kategori </td>
                                                <td>Price</td>
                                                <td>Stok</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $d)
                                                <tr class="text-center">
                                                    <td>{{ $no++ }}</td>
                                                    <td><span class="badges bg-lightgreen">{{ $d->id }}</span>
                                                    </td>
                                                    <td>
                                                        <a href="">{{ $d->name_product }}</a>
                                                    </td>
                                                    <td>{{ $d->category->name_category }}</td>
                                                    <td>{{ $d->price }}</td>
                                                    <td>{{ $d->stok }}</td>
                                                    <td>
                                                        <form action="{{ route('add_to_cart') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $d->id }}">
                                                            <input type="hidden" name="qty" value="1">
                                                            <button class="me-2 btn btn-link" type="submit">
                                                                <img src="/assets/img/icons/quotation1.svg"
                                                                    alt="img" width="24">
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
                    <div class="col-lg-4 col-sm-12 ">
                        <div class="order-list">
                            <div class="orderid">
                                <h4>Order List</h4>
                                <h5>Transaction id : #65565</h5>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label>Staff : </label>
                            <input type="text" value="{{ Auth::user()->name }}" readonly class="text-center">
                        </div>

                        {{-- <form action="{{ route('add_to_cart') }}" method="POST"> --}}
                            <div class="card-body pt-0">
                                <div class="totalitem">
                                    <h4>Total items : 4</h4>
                                    <a href="javascript:void(0);">Clear all</a>
                                </div>
                                <div class="product-table">
                                    @foreach ($cartItems as $d)
                                        <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="assets/img/product/product30.jpg" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <h4>{{ $d->product->name_product }}
                                                            <a href="javascript:void(0);" class="ms-2"
                                                                data-bs-toggle="modal" data-bs-target="#edit"><img
                                                                    src="assets/img/icons/edit-5.svg"
                                                                    alt="img"></a>
                                                        </h4>
                                                        <div class="productlinkset">
                                                            <h5>{{ $d->product_id }}</h5>
                                                        </div>
                                                        <div class="increment-decrement"
                                                            >
                                                            <div class="input-groups">
                                                                <a  href="{{ route('minus', ['id'=>$d->id]) }}"
                                                                    class="button-minus dec button " ><img src="assets/img/icons/minus11.png" alt="img" width="18" style="vertical-align: middle"></a>
                                                                <input type="text" name="qyt"
                                                                    value="{{ $d->qty }}"
                                                                    class="quantity-field"
                                                                    >
                                                                <a  href="{{ route('plus', ['id'=>$d->id]) }}" 
                                                                    class="button-plus inc button" ><img src="assets/img/icons/plus11.png" alt="img" width="18" style="vertical-align: middle"></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li>{{ $d->sub_total }}</li>
                                            <li>
                                               <a href="{{ route('destroy', ['id'=>$d->id]) }}" class="btn btn-link ">
                                                        <img src="assets/img/icons/delete-2.svg" alt="Delete">
                                                    </a>
                                            </li>
                                        </ul>
                                        @endforeach
                                </div>
                            </div>
                            <div class="split-card">
                            </div>
                            <div class="card-body pt-0 pb-2">
                                <div class="setvalue">
                                    <ul>
                                        <li>
                                            <h5>Subtotal </h5>
                                            <h6>55.00$</h6>
                                        </li>
                                        <li>
                                            <h5>Tax </h5>
                                            <h6>5.00$</h6>
                                        </li>
                                        <li class="total-value">
                                            <h5>Total </h5>
                                            <h6>{{ $total }}</h6>
                                        </li>
                                    </ul>
                                </div>
                                <form class="w-full" method="POST" action="{{ route('checkout') }}">
                                    @csrf
                                    <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label>Amount Paid *</label>
                                        <input type="text" name="paid" id="paid" placeholder="20.0**">
                                    </div>
                                </div>
                                <button type="submit" class="btn-totallabel border-0 col-lg-12 justify-between">
                                    <h5>Checkout</h5>
                                    <h6>{{ $total }}</h6>
                                </button>
                                </form>
                            </div>
                    </div>
                </div>
                {{-- </form> --}}
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
