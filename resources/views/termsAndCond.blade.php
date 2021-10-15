<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motikbet - Predictions from match lineup</title>
    <meta http-equiv="refresh" content="1800">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" media="print" onload="this.media='all'; this.onload=null;">
    <noscript><link rel="stylesheet" href="{{asset('css/app.css')}}"></noscript>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav class="navbar fixed-top navbar-dark" style="background-color: #25352c;">
        <a class="navbar-brand ml-3" style="letter-spacing: 5px; font-family: motikbetBrand" href="{{route('home')}}">Motikbet</a>
    </nav>
    <picture class="mt-5 img-fluid mx-auto">
        <source media="(min-width:1200px)" srcset="{{asset('images\Desktop_Hero.jpg')}}" class="w-100 img-fluid mx-auto">
        <source media="(min-width:992px)" srcset="{{asset('images\Desktop_Hero.jpg')}}">
        <source media="(max-width:767px)" srcset="{{asset('images\Mobile_Hero.jpg')}}" class="w-100 img-fluid mx-auto">
        <source media="(min-width: 576px)" srcset="{{asset('images\Mobile_Hero.jpg')}}" class="w-100 img-fluid mx-auto">
        <img src="{{asset('images\Mobile_Hero.jpg')}}" alt="Motikbet.com" style="width:100%;" class="mt-5" class="w-100 img-fluid mx-auto">
    </picture>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Terms and Conditions</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col mt-5">
                <p>
                    Disclaimer: By using this website you consent to being over the age of 18, you do not have gambling problems and also consent that the use of this website in your region is not prohibited.
                </p>
                <p>
                    Motikbet supports and promote responsible gambling and will not be held liable or responsible for any loss incured by the use of this website. The tips provided on this website are just predictions that may not perform as predicted, though percentage of accuracy has been attached to each market. The percentage of the prediction not coming (as expected) may occur with any match, therefore users need to stake with caution. We have written an algorithm that has been tested before being added to each market, even with that there is no guarantee of a match performing exactly as expected as there are other human factors that might affect the outcome of the match (such as red card, injuries to more than one player early in the match).
                </p>
                <p>
                    Motikbet will not responsible for your gambling habits, for help please visit <a href="https://www.begambleaware.org/" rel="nofollow" target="_blank" style="text-decoration:none"> BeGambleAware.org </a>
                </p>
                <p>
                    For changes in our terms and conditions, we will update the date below.
                </p>
                <p>
                    This policy was last modified on Febuary 7, 2020.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <h2>Privacy and Cookie Policy</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Your privacy is of utmost importance to us. To learn more about our privacy and cookie policy, please click <a href="#">here</a> </p>
            </div>
        </div>
        
        
        <br><br><br><br> <br>

    </div>





    <footer class="footer p-4 mb-n2" style="background-color: #25352c;">
        <div class="container-fluid text-white text-center">
            <p style="font-size: 0.8rem">&copy; {{date('Y')}} MOTIKBET.COM</p>
            <p style="font-size: 0.8rem">Terms and Conditions / Privacy and Cookie Policy</p>
            <p style="font-size: 0.8rem">Email: info@motikbet.com</p>
            <p class="text-muted">Motikbet supports and promotes responsible gambling. Please Gamble Responsibly.</p>
        </div>
    </footer>



</body>

    <style>
        @font-face {
            font-family: motikbetTimer;
            src: url('/fonts/timer.ttf');
        }
        @font-face {
            font-family: motikbetBrand;
             src: url('/brand/SWATRG.ttf'); 
        }
    </style>
    


    <!--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>-->
    
    
            <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NS325EEN9G"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-NS325EEN9G');
    </script>



    
    
</html>