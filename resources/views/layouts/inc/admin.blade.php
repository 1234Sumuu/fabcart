<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fav cart- Admin pannel</title>
    {{-- @yield('title') --}}
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    {{-- bootstrap core CSS --}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}
    {{-- Material Design Bootstrap--}}
    {{-- <link rel="stylesheet" href="{{asset('assets/mdb.min.css')}}"> --}}
    {{-- Custom style --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <header>
        @include('layouts.inc.adminnav')
        @include('layouts.inc.adminside')
    </header>
    <main class="pt-5 mx-lg-5">
        @yield('content')
    </main>
    @include('layouts.inc.adminfooter')

    {{-- <div style="height : 100vh">
        <div class="flex-center flex-column">
            <h1 class="animated fadeInmb-2">Material design</h1>
            <h5 class="animated fadeInmb-1">Thanks for using temp</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quo ipsam consequatur qui dolore laborum quaerat autem amet voluptates rerum, mollitia minus reprehenderit suscipit praesentium esse doloremque, harum, blanditiis illo.</p>
        </div> --}}

    </div>
      {{-- script --}}
      {{-- jquery --}}
      <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
      {{-- <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
      {{-- Bootstrap tooltip
      <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
      {{-- Bootstrap core Javascript
      <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      {{-- MDB core javascript
      <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script> --}}

      {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     --}}
</body>
</html>
