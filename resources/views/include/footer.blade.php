<section class="footer-section">
    <div class="inner-content">
        <div class="contact-details">
            <ul>
                <li><a href="mailto:sales@dfoxmedia.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                        sales@dfoxmedia.com</a></li>
                <li><i class="fa fa-phone-square" aria-hidden="true"></i> +91 86574 33009</li>
            </ul>
        </div>
        <div class="social-footer">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/dfoxmedia" target="_blank"> <i
                            class="fa fa-facebook fb"></i> </a> </li>
                <li><a target="_blank" href="https://www.instagram.com/dfoxmedia/" target="_blank"> <i
                            class="fa fa-instagram insta"></i> </a> </li>
                <li><a target="_blank" href="https://www.linkedin.com/company/10452083/admin/dashboard/"
                        target="_blank"> <i class="fa fa-linkedin ld"></i> </a> </li>
            </ul>
        </div>
        <p>© <?= date('Y') ?> DFOX MEDIA. All rights reserved</p>
    </div>
</section>
<script src="{{asset('frontend_asset/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend_asset/js/wow.min.js')}}"></script>
<script src="{{asset('frontend_asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend_asset/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('frontend_asset/js/owl.carousel.js')}}"></script>
<script src="{{asset('frontend_asset/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend_asset/js/main.js')}}"></script>
<!-- validate js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    (function ($) {
        $('.nav-tabs').responsiveTabs();
    })(jQuery);
</script>
<script type="text/javascript">
    $(document).ready(function () {

        // WOW animation initialize
        new WOW().init();
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                },
                comment: {
                    required: true,
                },

            },
            messages: {
                // Define error messages for your form fields
                name: {
                    required: "Please enter your name",
                },
                email: {
                    required: "Please enter email",
                },
                phone: {
                    required: "Please enter phone number",
                },
                comment: {
                    required: "Please enter comment",
                },
            },
            submitHandler: function (form) {
                // If form is valid, submit it

                form.submit();
            }
        });
    });
</script>
<script>
    const input = document.querySelector("#phone");
    const iti = window.intlTelInput(input, {
        separateDialCode: true,
        excludeCountries: ["pk", "bd"],
        preferredCountries: ["in", "us", "ae", "ca"]
    });
    // Listen for form submission
    const form1 = document.querySelector('form');
    form1.addEventListener('submit', function (event) {
        event.preventDefault();

        // Update hidden input with selected country code
        const countryCode = iti.getSelectedCountryData().dialCode;
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'country_code';
        hiddenInput.value = countryCode;
        form1.appendChild(hiddenInput);

        // Submit the form
        // form1.submit();
    });
</script>
</body>

</html>