@extends('layouts.app')
@section('content')   
<body>
    <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
        <h1 class="text-center mb-8">
            Welcome to <span class="text-blue-400">Topscan</span> 
            <span class="font-bold mb-8">Electronic Repair</span> Services</h1>
        <p class="font-nato font-bold">
        Topscan Services is Utawala’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.
        </p>

    </div>
    </div>
    <!--Introduction Section End-->
    <!-- Start Services -->
    <div class="container text-center border-bottom" id="Services">
    <h2 class="underlined">Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
        </div>
    </div>
    </div> <!-- End Services -->
    <!-- Start Happy Customer  -->

    <!--Start Contact Us-->
    <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4 underlined">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">
    <div class="col-md-12">

        <!--Start Contact Us Row-->
        <!-- End Contact Us 1st Column -->

        <div class="col-md-4">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        TopscanGlobal Ltd, <br>
        Nairobi, Kenya. <br>
        Phone: +254 7515 <br>
        <a href="#" target="_blank">www.topscanglobal.com</a> <br>

        <br><br>
        <strong>Utawala Branch:</strong> <br>
        TopscanGlobal Ltd, <br>
        Utawala, Githunguri <br>
        Phone: +254 742015850 <br>
        <a href="#" target="_blank">www.topscanglobal.com</a> <br>
        </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
    </div> <!-- End Contact Us Container-->
    <!-- End Contact Us -->
    </div> <!-- End Contact Us Container-->
    <!-- End Contact Us -->

    <!-- Start Footer-->
    <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #000000;">
    <div class="container">
        <!-- Start Footer Container -->
        <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
            <!-- Start Footer 1st Column -->
            <span class="pr-2">Follow Us: </span>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
            <!-- Start Footer 2nd Column -->
            <small> Designed by agwati &copy; 2023.
            </small>
            <small class="ml-2"><a href="{{ url('admin') }}">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
        </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
    </footer> <!-- End Footer -->

    <!-- Boostrap JavaScript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
</body>

</html>

@endsection