<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Unicode</title>
    <link rel="stylesheet" href="{{asset('assets/clients/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/style.css')}}">

    


    @yield('css')

</head>
<body>
    
    @include('clients.blocks.headers')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
    
                <aside>
                @section('sidebar')
                    @include('clients.blocks.sidebar')
                @show
            </aside>
        </div>
        <div class="col-8">
            <div class="container">
                @yield('container')
            </div>
        </div>
    </div>
        </div>
    </main>
    <footer>
        
        @include('clients.blocks.footers')
    </footer>
    <script {{asset('assets/clients/js/bootstrap.min.js')}}></script>
    

    @yield('js')
</body>
</html>