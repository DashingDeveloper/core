<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://indestructibletype.com/fonts/Jost.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="/css/admin/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
          
.material-icons-outlined {
  color: #828a9f;
}

#side-navbar #content a {
    display: flex;
}

#side-navbar #content a strong, #side-navbar .c-dropdown .ref-dropdown strong {

    font-weight: 400;
    font-size: 14px;
    text-transform: none;
}

        </style>
  </head>
  <body class="admin">
    @if (! Auth::guest())
    <div class="col-12 p-4">
        <div id="administrator"> </div>
    </div>
   @endif
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  @if (! Auth::guest())
  <script src="/js/admin-js/manifest.js"></script>
  <script src="/js/admin-js/vendor.js"></script>
  <script src="{{asset('js/admin-js/app.js')}}"></script>
  @endif
</html>