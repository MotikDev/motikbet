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
                <h2>Privacy Policy</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col mt-5">
                <p>
                    At Motikbet, we respect all data we hold about our members and comply strictly with data protection law and the General Data Protection Regulation (GDPR).
                </p>
            </div>
        </div>
        
        <br><br>
        
        <div class="row">
            <div class="col">
                <h2>Cookie Policy</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col mt-5">
                <p>
                    A cookie is a file that is stored on your computer when you visit almost all websites, its purpose is to make your computer remember that site, so that when you visit it again you can log in automatically or even make the site faster because it is already cached in your browser on that previous visit. 
                    <br>
                    The law states that we can store these cookies on your device if they are strictly necessary for the operation of this site. For all other types of cookies we need your permission.
                    <br>
                    We have different types of cookies (i.e. tracking cookie), like all sites, so that we can track how you have visited us and where you are from in the world.
                    <br><br><br>
                    
                    We store our cookies on all browsers that visit our website. We ask for your permission before storing cookies on your browser, that is if you are visiting our website for the first time.
                    <br><br>
                    We use cookies on our website because we want all of our users to have the best experience we can give them on Motikbet. The information provided by cookies allows us to optimize your experience on Motikbet.
                    <br><br>
                    Marketing cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third party advertisers. This tracking is done on an anonymous basis and, the company we work with is Google.
                    <br><br>
                    Cookies generally do not contain any information that can personally identify a user, but the personal information that we store about you may be linked to information stored and obtained from cookies.
                </p>
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