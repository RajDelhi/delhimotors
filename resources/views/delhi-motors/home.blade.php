<style>
    .error {color: white; }
</style>
<x-main>
     <x-slot:title>
        {{ $page_title }}
     </x-slot:title>

     <x-slot:p_keyword>
        {{ $p_keyword }}
     </x-slot:p_keyword>

     <x-slot:s_keyword>
        {{ $s_keyword }}
     </x-slot:s_keyword>

     <x-slot:description>
        {{ $description }}
     </x-slot:description>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Reliable & Professional Automobile Services in Delhi
                                        Service Center</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Luxury Car Servicing //
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Your One-Stop Solution for All Premium and Luxury Cars Periodic Service, Repairs, Paint Job & Accessories
                                        </h1>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex py-5 px-4">
                            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Quality Servicing</h5>
                                <p>Delivering top-tier vehicle maintenance and repair services, ensuring your car performs at its best every time.</p>
                                <a class="text-secondary border-bottom" href="/services">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex bg-light py-5 px-4">
                            <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Expert Workers</h5>
                                <p>Highly skilled technicians with extensive experience, providing precise, efficient, and reliable solutions for all car issues</p>
                                <a class="text-secondary border-bottom" href="/services">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex py-5 px-4">
                            <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Modern Equipment</h5>
                                <p>Utilizing state-of-the-art tools and technology to diagnose and repair vehicles, ensuring accuracy and superior results.</p>
                                <a class="text-secondary border-bottom" href="/services">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                            style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">45 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">Delhi Motors</span> Is Your trusted car service center in south delhi
                    </h1>
                    <p class="mb-4">Delhi Motors has been providing top-tier car services using mordern machine and equipment under guidance of high qualified service advisers for over many years. Our mission is to offer reliable, efficient, and affordable services in budget of car owners across Delhi and NCR. We believe in building long-term relationships with our clients and our commitment to quality has helped us earn the trust of thousands of satisfied customers.
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert in Luxury car service</h6>
                                    <span>Skilled professionals delivering reliable and expert automotive services every time.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center In Delhi NCR</h6>
                                    <span>Your trusted destination for high-quality, efficient, and affordable car premium car repairs.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Car Service Workers </h6>
                                    <span>Recognized professionals providing top-notch service with industry-leading expertise and care.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/about" class="btn btn-primary py-3 px-5">See More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">45</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">7</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>

                    <p class="text-white mb-0">Supporting Staff</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <!-- <h2 class="text-white mb-2" data-toggle="counter-up">307</h2> -->
                    <h2 class="text-white mb-2" >10000+</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

     <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <!-- <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                        <div class="bg-light text-center p-4">
                            <h4 class="fw-bold mb-0">Mr. Kirit Singh</h4>
                            <h5 class="fw-bold mb-0">Senior Consultant</h5>
                            <small>Mechanical Engineering from BITS</small><br>
                            <small>Experience :  4 (1972-1976) Years Auto Repair Experience from USA and in India from 1977 onword </small>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <!-- <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                        <div class="bg-light text-center p-4">
                        <h4 class="fw-bold mb-0">Mr. Jaikishan Kaushik</h4>
                            <h5 class="fw-bold mb-0">General Manager</h5>
                            <small>Experience: 46 Year Experience in Multy Brand work shop as a consultant and customer coordinator </small>
                            <small> </small>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <!-- <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                        <div class="bg-light text-center p-4">
                            <h4 class="fw-bold mb-0">Mr. Sarvender Singh Negi</h4>
                            <h5 class="fw-bold mb-0">Work Shop Manager </h5>
                            <small>Senior Workshop Manager : 23 Years wide working experience with  BMW, Ford, Nissan, Toyota, Mahindra </small>
                             <small> </small>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> -->

                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Team End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Premium Car Brands //</h6>
                <h1 class="mb-5">Our Specialized Expertise in Top-tier Luxury Car Brands</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/brand-1.png" alt="ROLLS ROYCE  car service center in delhi NCR">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/brand-2.png" alt="Porce car service center in delhi NCR">
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{url('/BMW-Sevice-Center-In-Delhi')}}" title="BMW car service center in delhi NCR"><img class="img-fluid" src="img/brand-3.png" alt="BMW car service center in delhi NCR"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{url('/Land-Rover-Service-Center-In-Delhi')}}" title="Land Rover Service Center In Delhi">
                                <img class="img-fluid" src="img/brand-4.png" alt="RANGE ROVER car service center in delhi NCR">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{url('/Best-Mercedes-Service-Center-In-Delhi')}}" title="Best Mercedes Service Center In Delhi">
                                <img class="img-fluid" src="img/brand-9.png" alt="Mercedes car service center in delhi NCR">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/brand-6.png" alt="Jaguar car service center in delhi NCR">
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{url('/Audi-Service-Center-In-Delhi')}}" title="Audi Service center in delhi">
                                <img class="img-fluid" src="img/brand-7.png" alt="AUDI car service center in delhi NCR">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{url('/Volvo-Service-Center-In-Delhi')}}" title="Volvo Service Center In Delhi">
                                <img class="img-fluid" src="img/brand-8.png" alt="VOLVO car service center in delhi NCR">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Maintenance & Repairs</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Car Washing & Detailing</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Tyres & Wheels</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Paint and Dent Job</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Car Insurance <br> New & Renewal</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Car Accessories & Customization</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">General Maintenance & Repairs</h3>
                                    <p class="mb-4">Keep your car running smoothly with our regular maintenance and repair services. From oil changes to brake checks, we ensure your vehicle stays in top condition.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Oil Changes</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Brake Services</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Battery Replacement</p>
                                    <p><i class="fa fa-check text-success me-3"></i>AC Repair</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Car Washing & Detailing</h3>
                                    <p class="mb-4">Give your car a fresh, clean look with our comprehensive washing and detailing services. We offer everything from exterior polishing to interior deep cleaning.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Interior & Exterior Cleaning</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Paint Protection</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Waxing & Polishing</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Tyres & Wheels Balancing</h3>
                                    <p class="mb-4">Get professional tyre services, including wheel balancing, alignment, and replacement. We stock high-quality tyres for all vehicle types.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tyre Replacement</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Wheel Alignment</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Balancing & Rotation</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Paint And Dent Job</h3>
                                    <p class="mb-4">A dent and paint job is a comprehensive process that not only fixes unsightly damage but also enhances the longevity and appearance of a vehicle.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Aesthetic Improvement: Restores the vehicle's appearance, increasing its resale value.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Protective Layer: New paint and clearcoat protect against rust and environmental damage.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Cost-Effectiveness:Addressing minor damage early can prevent more extensive repairs later.</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                            </div>

                            <div class="tab-pane fade" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Car Insurance New & Renewal</h3>
                                    <p class="mb-4">Secure affordable car insurance for new vehicles and renewals with ease. Enjoy comprehensive coverage, quick renewals, and exceptional customer support every step of the way.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Approx 4 -10 Comparison Quotes</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Complementary 6 Services</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Supportive Personal Staff</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-6">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Car Accessories & Customization</h3>
                                    <p class="mb-4">Personalize your car with our wide range of accessories and customization options.
                                        From seat covers to high-end audio systems, we help you enhance both comfort and style.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Audio System Installation</p>
                                    <p><i class="fa fa-check text-success me-3"></i>GPS & Navigation Systems</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Custom Seat Covers</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Premium & Luxury Car Repair Service Provider</h1>
                        <p class="text-white mb-0">Delhi Motors is a certified and award-winning premium and luxury car repair service provider in South Delhi. Our expert team specializes in advanced diagnostics, precise repairs, and exceptional maintenance for high-end vehicles. With cutting-edge technology and a commitment to excellence, we ensure your luxury car receives the care it deserves. Trust Delhi Motors for unmatched quality and reliability.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form name="booking" id ="booking">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border-0" name = "name" id="name" placeholder="Your Name" maxlength="50"
                                        style="height: 55px;">
                                        <spam class = "name_error_class"></spam>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="contact" class="form-control border-0" name = "contact" id="contact" placeholder="Your Contact Number "  maxlength="12"
                                        style="height: 55px;">
                                        <spam class = "contact_error_class"></spam>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="contact" class="form-control border-0" name = "bookingdate" id="bookingdate" placeholder="Booking date"
                                        style="height: 55px;">
                                        <spam class = "bookingdate_error_class"></spam>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name = "message" id="message" placeholder="Leave a message here"></textarea>
                                    <spam class = "message_error_class"></spam>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--Insurance start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Service center Is Approved By //</h6>
                <h1 class="mb-5">Top Insurance Company</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-10.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-2.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-8.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-6.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-9.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/insurance-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Bhupender Singh</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Delhi Motors India exceeded my expectations! The staff was friendly, professional, and got my car back on the road in no time. </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Pramod Raj</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Great service and very professional team! My car was ready exactly when they promised,
                            and they did an amazing job with the detailing. Highly recommend!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Vishal Verma</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Honest pricing and quality repairs. I’ve been coming here for years and trust them with all my vehicles.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Shiven Yadav</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Exceptional service and attention to detail! The team at Delhi Motors India went above and beyond to ensure my car was repaired quickly and efficiently.
                            They explained everything clearly and offered fair pricing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

</x-main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
<script>
	$().ready(function () {
        $( "#bookingdate" ).datepicker({
            dateFormat: 'dd/mm/yy',
            minDate: 0
        });
 ;

		$("#booking").validate({
			rules: {
				name: "required",
				contact:  {
					required: true,
                    digits: true
				},

				bookingdate: {
					required: true
				},
				message: {
					required: true

				}

			},

			messages: {
				name: " Please enter your  name",
				last_name: " Please enter your last name",
				contact: {
					required: " Please enter phone number",
					digits: " Please enter valid phone number"

				},
                bookingdate: " Please select booking date",
				message: " Please enter message for team"


			},
			// errorPlacement: function (error, element) {
            //     var placement = $(element).data('error');
			// 	if (placement) {
			// 		$(placement).append(error)
			// 	} else if (element.attr("name") == "name") {
			// 		error.appendTo(".name_error_class");
			// 	}
            //     else if (element.attr("name") == "contact") {
			// 		error.appendTo(".contact_error_class");
			// 	}
            //     else if (element.attr("name") == "bookingdate") {
			// 		error.appendTo(".bookingdate_error_class");
			// 	}
            //     else if (element.attr("name") == "message") {
			// 		error.appendTo(".message_error_class");
			// 	} else {
			// 		error.insertAfter(element);
			// 	}
			// },
			submitHandler: function (form) {
				var formData = $("#booking").serialize();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
				$.ajax({
					type: "POST",
					url: "<?= url('/') . '/book-service'; ?>",
					cache: false,
					data: formData,
					success: function (b) {
						var c = $.parseJSON(b);
						console.log(c);
						if (c.status == 1) {
							$('#booking').trigger("reset");
							alert(c.message);

						} else {


						}
					},
					error: function (b, d, c) {
                        alert("Error: There is some problem in processing. Please try again");
					},
				});
			}
		});

	});
</script>
