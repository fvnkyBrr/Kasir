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

    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/animate.css">

    <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    @if ($data)
        <form action="{{ route('proses_edit_product', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div id="global-loader">
                <div class="whirly-loader"> </div>
            </div>

            <div class="main-wrapper">

                @include('layouts.navbar')


                @include('layouts.sidebar')

                <div class="page-wrapper">
                    <div class="content">
                        <div class="page-header">
                            <div class="page-title">
                                <h4>Product Edit</h4>
                                <h6>Change your Product</h6>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Id Product</label>
                                            <input type="text" name="id" id="id" readonly
                                                value="{{ $data->id }}" readonly />
                                            <span class="form-text text-muted">
                                                Generate Otomatis
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="name_product" id="name_product"
                                                value="{{ $data->name_product }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="select" name="id_category" id="id_category">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach ($category as $cat)
                                                    <option value="{{ $cat->id }}"
                                                        {{ $data->id_category == $cat->id ? 'selected' : '' }}>
                                                        {{ $cat->name_category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" id="price"
                                                value="{{ $data->price }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="text" name="stok" id="stok"
                                                value="{{ $data->stok }}">
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <button type="submit" href="javascript:void(0);"
                                            class="btn btn-submit me-2">Edit</button>
                                        <a href="{{ route('product') }}" class="btn btn-cancel">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    @else
        <p>Data tidak ditemukan</p>
    @endif

    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <script src="/assets/js/feather.min.js"></script>

    <script src="/assets/js/jquery.slimscroll.min.js"></script>

    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/plugins/select2/js/select2.min.js"></script>

    <script src="/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="/assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="/assets/js/script.js"></script>
</body>

</html>
