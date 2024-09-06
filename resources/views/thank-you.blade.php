<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title>DFOX MEDIA</title>
    <!--Boostrap Core Css Start-->
    <link href="{{asset('frontend_asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend_asset/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!--Boostrap Core Css end-->
    <!--Google Font Css Start-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <!--Google Font Css end-->
    <!--External Core Css start-->
    <link href="{{asset('frontend_asset/css/default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend_asset/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend_asset/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend_asset/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend_asset/css/animate.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('frontend_asset/css/intlTelInput.css')}}" />
    <link rel="stylesheet" type="text/css" media="all"
        href="{{asset('frontend_asset/css/bootstrap-select.min.css')}}" />


</head>

<body>
    <section class="thankyou-section">
        <div class="main-banner">
            <div class="banner-wrapper">
                <div class="text-slide">
                    <h1 class="heading-wrap"><span style="color:#dc1589; display: block;">Thank You!</span> Your
                        Submission is Confirmed.</h1>
                    <p class="sub-heading">We appreciate you taking the time to fill out the form. Our team will get in
                        touch with you soon to discuss how we can help grow your business.</p>
                    <p class="sub-heading">We look forward to collaborating with you.</p>
                    <!-- Calendly link widget begin -->
                    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async>
                    </script>
                    <a class="btn-form-submit" href=""
                        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/project-strategy-call/45mins'});return false;">Book
                        A Discovery Call</a>
                    <!-- Calendly link widget end -->
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend_asset/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend_asset/js/main.js')}}"></script>
    <script>
        (function ($) {
            $('.nav-tabs').responsiveTabs();
        })(jQuery);
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            // WOW animation initialize
            new WOW().init();
        });
    </script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["pk", "bd"],
            preferredCountries: ["in", "us", "ae", "ca"]
        });
    </script>
</body>

</html>