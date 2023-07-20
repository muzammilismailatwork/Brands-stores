<!DOCTYPE html>
<html lang="en">

<head>
@include("layouts.dashboard.head")
    <title>@yield("title")</title>
</head>

<body class="">
<div class="wrapper ">
    @include("layouts.dashboard.sidebar")
    <div class="main-panel">
        <!-- Navbar -->
        @include("layouts.dashboard.header")
        <!-- End Navbar -->
        @yield("content")
        @include("layouts.dashboard.footer")
    </div>
</div>
@stack("js")
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {


        @if($errors->any())
        Swal.fire({
            icon: 'error',
            title:'Oops',
            html:"@foreach($errors->all() as $errors){{$errors}}<br/> @endforeach",
        })
        @endif
        @if(Session::has("success"))
        Swal.fire({
            icon:"success",
            title:"Success",
            html:"{{Session::get("success")}}",
        })
        @endif
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        @if(Session::has("error"))
        Swal.fire({
            icon:"error",
            title:"Opps",
            html:"{{Session::get("error")}}",
        })
        @endif
    });
</script>
</body>

</html>
