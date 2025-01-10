<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Doc || Contact Page </title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="Frontend/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Frontend/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Frontend/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="Frontend/assets/images/favicon/site.webmanifest">

    <!-- plugins styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+2:400,500,600,700,800%7CLato:100,300,400,700,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="Frontend/assets/css/animate.css">
    <link rel="stylesheet" href="Frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/hover-min.css">
    <link rel="stylesheet" href="Frontend/assets/css/swiper.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="Frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/oberlin-icons.css">


  {{-- toaster msg --}}
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >



    <!-- template styles -->
    <link rel="stylesheet" href="Frontend/assets/css/style.css">
    <link rel="stylesheet" href="Frontend/assets/css/responsive.css">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->



    <div class="page-wrapper">

      @include('Frontend.body.topbar')

        <!-- /.topbar-one -->

       @include('Frontend.body.header')

        <!-- /.main-nav-one -->



        <section class="page-header" style="background-image: url(assets/images/background/page-header-bg-1-1.jpg);">
            <div class="container">
                <h2>Contact Us</h2>
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="contact-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Request for Appoirnment</p>
                    <h3>Apply for Farm Doc <br> Specialist</h3>
                </div><!-- /.block-title -->




                <form action="{{ route('user.appoinment.store') }}" method="post"  class="contact-one__form contact">
                    {{-- "> --}}
                        @csrf

                        <div class="row">


                            <div class="col-md-6">
                                <input type="text" placeholder="Full Name" name="full_name" required>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <input type="text" placeholder="Email Address" name="email" required>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <input type="text" placeholder="Phone Number" name="phone" required>
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <select name="discussion_name" class="selectpicker">

                                    @foreach ($discussions as $discussion)
                                     <option value="{{ $discussion->discussion_name }}">{{ $discussion->discussion_name }}</option>
                                    @endforeach


                                </select><!-- /.selectpicker -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-12">
                                <textarea name="message" required placeholder="Where're you from?Type ur problem?(e.g.From Savar,Need Animal care)"></textarea >
                            </div><!-- /.col-md-12 -->

                            <div class="col-md-12 text-left">
                                {{-- <button  >Submit</button> --}}
                                 <button type="submit" class="thm-btn contact-one__btn bg-success">Submit Now</button>
                                <!-- /.thm-btn contact-one__btn -->
                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->
                    </form>


 <div class="result"></div><!-- /.result -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->


        <section class="contact-info-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Contact Us</p>
                    <h3>Get In Touch</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="contact-info-one__single text-center">
                            <div class="contact-info-one__icon">
                                <i class="oberlin-icon-email"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <h3>Email Address</h3>
                            <p><a href="mailto:khanawsafurrahman@gmail.com">khanawsafurrahman@gmail.com</a> <br> </p>
                           
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 wow fadeInDown" data-wow-duration="1500ms">
                        <div class="contact-info-one__single text-center">
                            <div class="contact-info-one__icon">
                                <i class="oberlin-icon-phone"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <h3>Phone Number</h3>
                            <p><a href="tel:01401453394">01401453394</a> <br> <a
                                    href="tel:01644453394">01644453394</a></p>
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="contact-info-one__single text-center">
                            <div class="contact-info-one__icon">
                                <i class="oberlin-icon-marker"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <h3>Office Address</h3>
                            <p>Near Lab Aid Hospital, <br> Savar, Dhaka</p>
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <div style="width: 100%; margin-bottom:20px"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Lab%20Aid%20hospital,Savar,Dhaka+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>




            @include('Frontend.body.footer')

        </div><!-- /.page-wrapper -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <div class="side-menu__block">

            <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
                <!-- /.fa fa-close --></a>

            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">

                <a href="index.html" class="side-menu__logo"><img src="Frontend/assets/images/light-logo-1-1.png" alt=""
                        width="190"></a>
                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <p class="side-menu__block__copy">(c) 2021 <a href="#">Farm Doc</a> - All rights reserved.</p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!-- template scripts -->
        <script src="Frontend/assets/js/jquery.min.js"></script>
        <script src="Frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="Frontend/assets/js/bootstrap-datepicker.min.js"></script>
        <script src="Frontend/assets/js/bootstrap-select.min.js"></script>
        <script src="Frontend/assets/js/isotope.js"></script>
        <script src="Frontend/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="Frontend/assets/js/jquery.circleType.js"></script>
        <script src="Frontend/assets/js/waypoints.min.js"></script>
        <script src="Frontend/assets/js/jquery.counterup.min.js"></script>
        <script src="Frontend/assets/js/jquery.lettering.min.js"></script>
        <script src="Frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="Frontend/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="Frontend/assets/js/jquery.validate.min.js"></script>
        <script src="Frontend/assets/js/owl.carousel.min.js"></script>
        <script src="Frontend/assets/js/TweenMax.min.js"></script>
        <script src="Frontend/assets/js/wow.min.js"></script>
        <script src="Frontend/assets/js/swiper.min.js"></script>
        <script src="Frontend/assets/js/theme.js"></script>




        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
         @if(Session::has('message'))
         var type = "{{ Session::get('alert-type','info') }}"
         switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
         }
         @endif
        </script>


    </body>

    </html>
