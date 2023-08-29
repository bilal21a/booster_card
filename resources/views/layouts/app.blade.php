<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booster Card</title>
    <link rel="icon" href="{{ asset('imgs/booster_white_small_logo.png') }}" type="image/x-icon">

    <link rel='stylesheet' href='{{ asset('css/custom-frontend-lite.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-7.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/all.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/v4-shims.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-12.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/style.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/classic-themes.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/template-kit-export-public.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/style.min2.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/theme.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-5.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/ekiticons.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/elementor-icons.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/swiper.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/widget-styles.css') }}' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Gantari%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2' />
    <link rel='stylesheet' href='{{ asset('css/fontawesome.min.css') }}' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href="{{ asset('css/brands.min.css') }}" />
    <link rel='stylesheet' href='{{ asset('custom/custom_comon.css') }}' />
    <script src='{{ asset('js_service/shims.min.js') }}'></script>
    <script src='{{ asset('js/jquery.min.js') }}'></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src='{{ asset('js/template-kit-export-public.min.js') }}'></script>
    <script src='{{ asset('custom/custom_comon.js') }}'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @yield('css')
    <style>
        .bg_green {
            background-color: #136736;
        }

        .bg_brown {
            background-color: #936c07;
        }

        .bg_orange {
            background-color: var(--e-global-color-primary);
        }

        .border_black {
            border: 1px solid black !important;
        }

        .border_brown {
            border: 1px solid #936C07 !important;
        }

        .border_green {
            border: 1px solid #136736 !important;
        }

        .border_black:hover,
        .border_brown:hover,
        .border_green:hover {
            border-color: var(--e-global-color-primary);
            transform: scale(1.1);
        }

        @media (max-width: 767px) {
            .mobile_login_list{
                display: block !important;
            }
        }
        .login_signup_text {
            text-align: center;
            color: black !important;
            /* padding-bottom: 1px; */
            padding-top: 6px;
        }

        .backgroung_img {
            background-image: url("imgs/Group 1000002283.png");
            padding: 20px 80px 20px 20px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            border-radius: 20px 20px 20px 20px;


        }

        .height_select {
            height: 48px;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: var(--e-global-color-d59e8a8);
            border-radius: 0px 0px 0px 0px;
        }


        .height_select:focus {
            border-color: var(--e-global-color-primary);
            box-shadow:none !important;
        }
    </style>
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-16 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-16">
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')



    <link rel='stylesheet' href='{{ asset('css/odometer-theme-default.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-187.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/metform-ui.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/style.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/animations.min.css') }}' />
    <script src='{{ asset('js/hello-frontend.min.js') }}'></script>
    <script src='{{ asset('js/frontend-script.js') }}'></script>
    <script src="{{ asset('js/widget-scripts.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/htm.js') }}"></script>
    <script src="{{ asset('js/wp-polyfill-inert.min.js') }}"></script>
    <script src="{{ asset('js/regenerator-runtime.min.js') }}"></script>
    <script src="{{ asset('js/wp-polyfill.min.js') }}"></script>
    <script src="{{ asset('js/react.min.js') }}"></script>
    <script src="{{ asset('js/react-dom.min.js') }}"></script>
    <script src="{{ asset('js/escape-html.min.js') }}"></script>
    <script src="{{ asset('js/element.min.js') }}"></script>
    <script src='{{ asset('js/app.js') }}'></script>
    <script src='{{ asset('js/webpack.runtime.min.js') }}'></script>
    <script src='{{ asset('js/frontend-modules.min.js') }}'></script>
    <script src='{{ asset('js/core.min.js') }}'></script>
    <script src='{{ asset('js/frontend.min.js') }}'></script>
    <script src='{{ asset('js/animate-circle.js') }}'></script>
    <script src='{{ asset('js/elementor.js') }}'></script>

    @yield('js')
</body>

</html>
