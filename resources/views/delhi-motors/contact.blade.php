<style>
    .error {color: #f2545b; }
</style>
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
    <!-- <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                    <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Phone Numbers //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>
                                <a href="tel:011-43554962">011-43554962</a>,
                                <a href="tel:09891611064">09891611064</a>
</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Booking //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i><a href="mailto:book@delhimotorsindia.com">book@delhimotorsindia.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Complaint //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i><a href="mailto:complaint@delhimotorsindia.com">complaint@delhimotorsindia.com</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">


                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23118.007920937973!2d77.27701738827288!3d28.508185646871375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce70043f42f83%3A0xd0b68a9f07f15e95!2sDelhi%20Motors%20-%20Bosch%20Car%20service%20center!5e1!3m2!1sen!2sin!4v1728541995788!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">We’re Here to Help – Whether You Have a Question or Want to Schedule a Service..</p>
                        <form name="booking" id ="booking">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name = "name" id="name" placeholder="Your Name" maxlength="50">
                                        <label for="name">Your Name</label>
                                        <spam class = "name_error_class"></spam>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name = "contact" id="contact" placeholder="Your Contact Number "  maxlength="12">
                                        <label for="contact">Contact Number </label>
                                        <spam class = "contact_error_class"></spam>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text"class="form-control" name = "bookingdate" id="bookingdate" placeholder="Book a date for service"   >
                                        <label for="subject">Book a date for service</label>
                                        <spam class = "bookingdate_error_class"></spam>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name = "message" placeholder="Leave a message here" id="message"
                                            style="height: 100px"  maxlength="400"></textarea>
                                        <label for="message">Message</label>
                                        <spam class = "message_error_class"></spam>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
			errorPlacement: function (error, element) {
                var placement = $(element).data('error');
				if (placement) {
					$(placement).append(error)
				} else if (element.attr("name") == "name") {
					error.appendTo(".name_error_class");
				}
                else if (element.attr("name") == "contact") {
					error.appendTo(".contact_error_class");
				}
                else if (element.attr("name") == "bookingdate") {
					error.appendTo(".bookingdate_error_class");
				}
                else if (element.attr("name") == "message") {
					error.appendTo(".message_error_class");
				} else {
					error.insertAfter(element);
				}
			},
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
                            window.location.href = "<?= url('/') ; ?>";
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
