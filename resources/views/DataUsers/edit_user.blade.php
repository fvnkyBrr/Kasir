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
    <title>Edit Data</title>

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
    <form action="{{ route('proses_edit_users', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                            <h4>User Edit</h4>
                            <h6>Change your User</h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="name" id="name" value="{{ $data->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" id="email" value="{{ $data->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password"
                                            placeholder="Leave blank to keep current password">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="select" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki"
                                                {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>User Level</label>
                                        <select class="select" name="user_level" id="user_level">
                                            <option value="" selected disabled>Pilih Role</option>
                                            <option value="admin"
                                                {{ $data->user_level == 'admin' ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="user"
                                                {{ $data->user_level == 'user' ? 'selected' : '' }}>User
                                            </option>
                                        </select>

                                    </div>
                                </div>
                            
                                <div class="col-lg-12">
                                    <button href="javascript:void(0);" class="btn btn-submit me-2"
                                        type="submit">Submit</button>
                                    <a href="{{ route('users') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


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
