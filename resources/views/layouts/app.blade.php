<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="{{ route('home') }}">
                <strong>{{ config('app.name', 'Laravel') }}</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- /.navbar-header -->

        </div>
    </nav>
    <!-- content -->
    @yield('content')
    <!--endcontent-->
    <input type="hidden" id="csrf" value='{{ csrf_token() }}'>
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $("#search_load_table").hide();
            var csrf = $("#csrf").val();
            $("#search").on("input", function() {
                var search = $("#search").val();


                $.ajax({
                    type: "POST",
                    url: "{{ url('jobs/load') }}",
                    dataType: 'json',
                    data: {
                        _token: csrf,
                        search: search,

                    },
                    success: function(data) {
                        $('#load_table').hide();
                        $('#search_load_table').show();
                        $('#search_load_table').html(data.result);
                    }
                });


            });


        });
    </script>
</body>

</html>
