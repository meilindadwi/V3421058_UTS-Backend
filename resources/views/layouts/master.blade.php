<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | Admin</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../../../assets/plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../../assets/plugins/toastr/toastr.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../../assets/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="../../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                    height="60" width="60">
            </div>

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="../../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="/profil/{{Auth::user()->foto}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{Auth::user()->name;}}</a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item @php if(\Request::path() == 'admin58/dashboard58')echo " menu-open"
                                @endphp">
                                <a href="/admin58/dashboard58" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item @php if(\Request::path() == 'admin58/data-agama58')echo " menu-open"
                                @endphp">
                                <a href="/admin58/data-agama58" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Data Agama
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/logout58" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('title')</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline-block">
                    &copy; 5822 <b>Meilinda</b>
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="../../../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../../assets/plugins/jszip/jszip.min.js"></script>
        <script src="../../../assets/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../../assets/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="../../../assets/assets/dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE App -->
        <script src="../../../assets/dist/js/adminlte.js"></script>
        <!-- Toastr -->
        <script src="../../../assets/plugins/toastr/toastr.min.js"></script>
        <script>
            $(function () {
              $("#table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
              }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            });
        </script>
        @if(Session::has('agama'))
        <script>
            $(function () {
                        toastr.success("{{Session::get('agama')}}");
                    });
        </script>
        @endif
        @if(Session::has('agamaadd'))
        <script>
            $(function () {
                        toastr.success("{{Session::get('agamaadd')}}");
                    });
        </script>
        @endif
        @if(Session::has('agamadel'))
        <script>
            $(function () {
                        toastr.success("{{Session::get('agamadel')}}");
                    });
        </script>
        @endif
        @if(Session::has('approved'))
        <script>
            $(function () {
                toastr.success("{{Session::get('approved')}}");
            });
        </script>
        @endif
        @if(Session::has('foto'))
        <script>
            $(function () {
                toastr.success("{{Session::get('foto')}}");
            });
        </script>
        @endif
    </body>

</html>