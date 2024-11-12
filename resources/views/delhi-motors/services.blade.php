<x-main>
    <!-- Carousel Start -->

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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Expert Automobile Services //</h6>
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
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
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
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">At Delhi Motors India, we pride ourselves on being a certified and award-winning car repair service provider. Our team of highly trained technicians delivers
                            top-quality repairs and maintenance for all vehicle makes and models. Recognized for excellence in customer service,
                            we ensure every repair meets the highest industry standards. From routine maintenance to complex repairs, we provide reliable, efficient, and affordable solutions.
                            Our commitment to quality and customer satisfaction has earned us numerous awards, making us one of Delhi’s most trusted names in automotive care. Experience unparalleled service and
                            drive with confidence.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">What Our Clients Are Saying</h1>
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

    <!-- Testimonial End -->

</x-main>
