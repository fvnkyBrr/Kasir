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

            <div class="content p-4">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Detail Order</h4>
                        <h6>Add/Update Sales Return</h6>
                    </div>
                </div>
                <div class="card p-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID Product </th>
                                            <th>Product Name</th>
                                            <th>Unit Price </th>
                                            <th>Stock</th>
                                            <th>QTY </th>
                                            <th>Tax % </th>
                                            <th>Subtotal ($) </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="badges bg-lightgreen">2131231</span></td>
                                            <td class="">
                                                <a href="javascript:void(0);">Apple Earpods</a>
                                            </td>
                                            <td>150</td>
                                            <td>500</td>
                                            <td>500</td>
                                            <td>50</td>
                                            <td>250</td>
                                            <td>
                                                <a class="delete-set"><img src="assets/img/icons/delete.svg"
                                                        alt="svg"></a>
                                            </td>
                                        </tr>
                                        <tr class="bor-b1">
                                            <td><span class="badges bg-lightgreen">2131231</span></td>
                                            <td class="">
                                                <a href="javascript:void(0);">Macbook Pro</a>
                                            </td>
                                            <td>150</td>
                                            <td>500</td>
                                            <td>500</td>
                                            <td>50</td>
                                            <td>250</td>
                                            <td>
                                                <a class="delete-set"><img src="assets/img/icons/delete.svg"
                                                        alt="svg"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 float-md-right">
                                <div class="total-order">
                                    <ul>
                                        <li>
                                            <h4>Order Tax</h4>
                                            <h5>$ 0.00 (0.00%)</h5>
                                        </li>
                                        <li>
                                            <h4>Discount </h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                        <li>
                                            <h4>Shipping</h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                        <li class="total">
                                            <h4>Grand Total</h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                                <a href="salesreturnlist.html" class="btn btn-cancel">Cancel</a>
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
