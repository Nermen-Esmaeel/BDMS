<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('backend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('backend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div class="container-fluid position-relative d-flex p-0">
        @include('admin.layouts.sidebar')
        <div class="content">
            @include('admin.layouts.navbar')
            @yield('content')

        </div>


    </div>






    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('backend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('backendlib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('backendlib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('backendlib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('backendlib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('backendlib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('backend/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--success-->
    @if(Session::has('success'))
    <script>
        toastr.options = {
            "progressBar": true
            , "closeButton": true
        , }
        toastr.success("{{Session::get('success')}}", 'Success!', {
            timeOut: 1200000
        });

    </script>
    @endif

    <!--Edited-->
    @if(Session::has('edit'))
    <script>
        toastr.options = {
            "progressBar": true
            , "closeButton": true
        , }
        toastr.warning("{{Session::get('edit')}}", 'Edited!', {
            timeOut: 1200000
        });

    </script>
    @endif

    <!--Deleted-->
    @if(Session::has('delete'))
    <script>
        toastr.options = {
            "progressBar": true
            , "closeButton": true
        , }
        toastr.error("{{Session::get('delete')}}", 'Warning', {
            timeOut: 1200000
        });

    </script>
    @endif

</body>

</html>
