<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Question Bank</title>
    <!-- css start -->
    <!-- plugin css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/common.css') }}" />
</head>

<body>
    <!-- header start -->
   @include('frontend.partials.header')
    <!-- header end -->

   @yield('content')

    <!-- footer start -->
    @include('frontend.partials.footer')
    <!-- footer end -->

    <script src="{{ asset('frontend/assets/js/plugin.js') }}"></script>

</body>

</html>
