<!doctype html>
<html lang=" str_replace('_', '-', app()->getLocale()) ">
<head>
    <meta charset="utf-8">

    <title> Tiket </title>

    
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body style="background-color: #14b375;">
<h1  style="background-color:#01643e;" class="text-warning text-center" >Gestão Tiket</h1>
  <div class=" container">
    
    <div class=" bg-white border justify-content-center rounded">
        @yield('conteudo')
    </div>
    
  </div>
  <div class="mt-2 bg-white border justify-content-center rounded">
        @yield('tabela')
    </div>
</body>
</html>