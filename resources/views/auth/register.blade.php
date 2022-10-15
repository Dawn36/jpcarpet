<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <title>Sign Up - JP Carpet Cleaning</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('theme/assets/media/logos/logo.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('theme/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-light">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{ asset('theme/assets/media/illustrations/sigma-1/14.png')}})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="#" class="mb-12">
                    <img alt="Logo" src="{{ asset('theme/assets/media/logos/logo.png')}}" class="h-100px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('register') }}" class="form w-100" id="kt_sign_up_form" onsubmit="return validateForm()">

                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Create an Account</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                <a href="{{route('login')}}" class="link-primary fw-bolder">Sign in here </a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--begin::Heading-->
                      
                        <input type="hidden" name="role_id" value="2"/>
                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <label class="form-label fs-6 fw-bolder text-dark">First Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" name="first_name" autocomplete="off" required />
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label fs-6 fw-bolder text-dark">Last Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" name="last_name" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-lg-6">
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" required />
                                @if($errors->has('email'))
                                <div class="error" style="color: red"><b>{{ $errors->first('email') }}</b></div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label fs-6 fw-bolder text-dark">Mobile Phone</label>
                                <input class="form-control form-control-lg form-control-solid" type="number" name="contact_no" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <div class="col-lg-12">
                                <label class="form-label fs-6 fw-bolder text-dark">Password</label>
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" id='password' name="password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                @if($errors->has('password'))
                                <div class="error" style="color: red"><b>{{ $errors->first('password') }}</b></div>
                                @endif
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                        </div>

                        </div>
                        <div class="row mb-10">
                            <div class="col-lg-12">
                                <label class="form-label fs-6 fw-bolder text-dark">Confirm password</label>
                                <input class="form-control form-control-lg form-control-solid" type="password" id='confirm' name="confirm" autocomplete="off" required />
                            </div>
                        </div>
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button class="btn btn-lg btn-primary w-100 mb-5">Continue</button>

                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://www.jpcarpetcleaning.com/about.html" class="text-muted text-hover-primary px-2">About</a>
                    <a href="https://www.jpcarpetcleaning.com/contact.html" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('theme/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('theme/assets/js/scripts.bundle.js')}}"></script>
    <script src="{{ asset('theme/assets/js/custom/authentication/sign-up/general.js')}}"></script>

    <script>
        function validateForm() {
            let pass = $('#password').val();
            let conf = $('#confirm').val();
            if (pass != conf) {
                alert("Password not match with Confirm Password");
                return false;

            }
        }
    </script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
