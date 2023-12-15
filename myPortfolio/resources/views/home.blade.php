<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta name="author" content="Nguyen Dac Hai">
  <meta content="description" name="Nguyen Dac Hai's Portfolio">
  <meta name="google" content="notranslate" />
  <meta name="keywords" content="Nguyen Dac Hai, Portfolio, nguyendachai.id.vn, Nguyen Dac Hai's Portfolio">
  

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <title>{{$title}}</title>  

<link href="./assets/css/main.3f6952e4.css" rel="stylesheet">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1CJ62BFZ7S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1CJ62BFZ7S');
</script>

</head>

<body class="minimal">
    @include('layouts.header')
    @yield('content')
   
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     type();
     movingBackgroundImage();
  });
</script>


<script type="text/javascript" src="./assets/js/main.70a66962.js"></script></body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    // Select the carousel-inner and add the active class to the first child
    $('.carousel-inner').find('.item').first().addClass('active');
  });
</script>

</html>