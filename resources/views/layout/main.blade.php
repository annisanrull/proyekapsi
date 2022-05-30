@include('layout/header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layout/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layout/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">




                    @yield('container')



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/js2/bootstrap.bundle.min.js') }}"></script>



    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>



</body>

</html>