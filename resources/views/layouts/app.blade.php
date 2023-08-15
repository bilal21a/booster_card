<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
    <link rel='stylesheet' href="{{ asset('css/brands.min.css') }}" />
	<link rel='stylesheet' href='{{ asset('custom/custom_comon.css') }}' />
    <script src='{{ asset('js_service/shims.min.js') }}'></script>
    <script src='{{ asset('js/jquery.min.js') }}'></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src='{{ asset('js/template-kit-export-public.min.js') }}'></script>
    <script src='{{ asset('custom/custom_comon.js') }}'></script>
    @yield('css')
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
