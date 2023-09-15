<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Test Josiel Pinto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-lg-flex headercolor">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="text-white">
                    <a href="" class="me-3 text-white ml-5 p-1"><i class="fa fa-check-circle me-2 text-white"></i>30-DAY SATISFACTION GUARANTEE</a>
                    <a href="" class="me-3 text-white m-5"><i class="fa fa-truck me-2 text-white"></i>FREE DELIVERY ON ONDERS OVER $40.00</a>
                    <a href="" class="me-3 text-white m-5"><i class="fa fa-heart me-2 text-white"></i>50.000+ HAPPY CUSTOMERS</a>
                    <a href="" class="me-3 text-white m-5"><i class="fa fa-check me-2 text-white"></i>100% MONEY GUARANTEE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid text-white pb-5 d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <div class="ms-3">
                        <img src="{{ asset('img/clarifion_logo.webp') }}" class="img-fluid" style="width: 200px;">
                    </div>
                </div> 
               
                <div class="d-flex">
                    <div class="ms-3">
                    <img src="{{ asset('img/mcafee.png') }}" style="width: 120px;">
                    <img src="{{ asset('img/Norton-logo-2021.svg.webp') }}" style="width: 120px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->

     <!-- Service Start -->
     <div class="container-fluid">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Wait ! Your Order In Progress.</h1>
                <p class="mb-5">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing</p>
            </div>


        </div>
    </div>
    <!-- Service End -->


    <!-- Features Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row g-0 ">
                <div class="col-md-6 col-lg-3" data-wow-delay="0.1s">
                    <div class="h-100 p-5">
 
                        <h5 class="mb-3"><i class="fa fa-check-circle fa-lg" style="color: green;"></i> Step 1: Cart Review</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-wow-delay="0.3s">
                    <div class="feature-item h-100 p-5">
      
                        <h5 class="mb-3"><i class="fa fa-check-circle fa-lg" style="color: green;"></i> Step 2: Checkout</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3  " data-wow-delay="0.5s">
                    <div class="feature-item  h-100 p-5">
  
                        <h5 class="mb-3"><span class="border border-primary rounded-circle">3</span> Step 3: Special Offer</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-wow-delay="0.7s">
                    <div class="feature-item h-100 p-5">

                        <h5 class="mb-3">Step 4: Confirmation</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Appoinment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 fondogris pb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                
                <div class="display-6">


                    <img src="{{ asset('img/producto.jpg') }}" style="width: 645px;">


                </div>
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Address</h5>
                            <span>123 Street, New York, USA</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Time</h5>
                            <span>Mon-Sat 09am-5pm, Sun Closed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4"><a href="">ONE TIME ONLY</a>  special price for 6 extra Clarifion for only <a href=""> $14 each</a> <br> ($84.00 total!)</h2>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="form-floating">
                                <img src="{{ asset('img/producto.jpg') }}" style="width: 200px;">

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-floating">
                                <h5>Clarifion Air lonizer</h5>
                                <div class="valoracion align-items-start">
                                    <!-- Estrella 1 -->
                                    <button>
                                        <i class="fas fa-star"></i>
                                    </button>

                                    <!-- Estrella 2 -->
                                    <button>
                                        <i class="fas fa-star"></i>
                                    </button>

                                    <!-- Estrella 3 -->
                                    <button>
                                        <i class="fas fa-star"></i>
                                    </button>

                                    <!-- Estrella 4 -->
                                    <button>
                                        <i class="fas fa-star"></i>
                                    </button>

                                    <!-- Estrella 5 -->
                                    <button>
                                        <i class="fas fa-star"></i>
                                    </button>

                                    </div>
                            </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <span>
                                
                                <i class="fa fa-circle fa-xs"  style="color: blue;"></i> 12 left in Stock
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <span>
                                Simply plug a Clarifion into any standard outlet and replace bulky, expensive air purifiers with a simple.
                                </span>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <span><i class="fa fa-check pb-3 fa-lg" style="color: blue;"></i> Negative Ion Technology may <strong>help with allergens</strong></span><br>
                                <span><i class="fa fa-check pb-3 fa-lg" style="color: blue;"></i> Designed for <strong>aire rejuvenation</strong></span><br>
                                <span><i class="fa fa-check pb-3 fa-lg" style="color: blue;"></i> <strong>Perfect for every room</strong> in all types of places</span>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <div class="alert alert-primary" role="alert">
                                <i class="bi bi-percent"></i> Save 53% and get 6 extra Clarifision for only $14 Each.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="botonConfirmar" type="submit">YES - CLAIM MY DISCOUNT <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->



    <!-- Copyright Start -->
    <div class="container-fluid headercolor text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">Copyright &copy; 2023 | clarifionsupport@clarifion.com</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p class="mb-0"><i class="fa fa-lock me-3" aria-hidden="true"></i> Secure 256-Bit SSLEncryption.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap');

.font-style-title {font-family:'Source Sans Pro', sans-serif !important;
}

.font-style-subtitle {font-family: 'Source Sans Pro', sans-serif !important;
}

.font-style-heading {font-family: 'Source Sans Pro', sans-serif !important;
}

.font-style-normalText {font-family: 'Source Sans Pro', sans-serif !important;
}

.headercolor{
    background-color: #252F3D;
    color: #FFFFFF;
}

html{
    font-family: 'Manrope';
}

.bordeCircular{
    border-radius: 5px;
}

.fondogris {
    background-color: #F5F5F5;
}

.botonConfirmar {
    background-color: #83D85A; /* Green */
    border: none;
    border-radius: 50px;
    color: white;
    padding: 15px 200px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

:root {
    --color-inactivo: #ffa400;
    --color-hover: #ffa400;
}
.valoracion {
    display: flex;
    flex-direction: row-reverse;
}
.valoracion button {
    position: relative;
    right: 265px;
    background-color: initial;
    border: 0;
    color: var(--color-inactivo);
    transition: 1s all;
}
.valoracion button:hover {
    cursor: pointer;
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(1):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(2):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(3):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(4):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(5):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}




</style>