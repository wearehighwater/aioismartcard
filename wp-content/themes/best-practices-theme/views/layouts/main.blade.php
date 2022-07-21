<!DOCTYPE html>
<html>
    <head>
        @section('head')
            <meta charset="{{bloginfo( 'charset' )}}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
            <link rel="profile" href="http://gmpg.org/xfn/11">

            {!! wp_head() !!}
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{mix('main.css')}}">
        @show
    </head>

    <body {{body_class()}}>
        <div class="wrapper">
            @section('header')
                @include('views.partials.header')
            @show

            @yield('pre-content')

            @section('the-loop')
                @if (have_posts())
                    @yield('content')
                @else
                    @yield('no-content')
                @endif
            @show

            @yield('post-content')

            @section('footer')
                @include('views.partials.footer')
            @show

            @section('scripts')
                <script src="{{mix('main.js')}}"></script>
                <?php wp_footer(); ?>
            @show
        </div>
    </body>
</html>