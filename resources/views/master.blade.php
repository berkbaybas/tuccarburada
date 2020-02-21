<!DOCTYPE html>
<html dir="ltr" lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="xERVYbZqmmuZ5dBYcxQuZmBk8TIlMQG3YBLSVq0vZf4" />
    <title>@yield('title')</title>
    @yield('meta')

    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    @yield('styles')
</head>
<body>
    @include('partials.header')
    @yield('content')

      <!-- back to top button-->
    <a id="button"></a>


    @include('partials.footer')
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- init animations -->
    <script src="js/wow.js/dist/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- end animations -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144821498-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144821498-1');
    </script>

        <!-- Back to top button -->
        <script>
        var btn = $('#button');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 475) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '800');
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5d40a969e5ae967ef80d9385/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    @yield('scripts')
</body>
</html>
