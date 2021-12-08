<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motikbet - Predictions from match lineup</title>
    <meta http-equiv="refresh" content="1800">
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}" media="print" onload="this.media='all'; this.onload=null;"> -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
                <h3 class="text-center mx-auto w-75 mt-5 font-weight-bold">
                    Motikbet is the first prediction website to generate predictions from match lineups.
                </h3>
                <!--<h3 class="text-center mx-auto w-75 mt-5 font-weight-bold">-->
                <!--    Motikbet is for people who invest big amount of money in sport betting and people with long-term strategies.-->
                <!--</h3>-->
            </div>
        </div>

        <div class="row mb-5">
            <div class="col mt-5">
                <h3>
                    You're welcome to Motikbet, we generate our predictions from team forms, strengths, and head-to-head. 
                    No prediction is perfect, so, gamble with caution.
                    {{-- Motikbet has higher accuracy than other prediction websites as we generate predictions from match lineups. That is why the algorithm (without any human influence) generates each prediction thirty (30) minutes before the match kickoff. --}}
                </h3>
                <!--<h3>Motikbet is different from other prediction websites as we generate predictions from match lineups. That is why the algorithm generates each prediction thirty (30) minutes before the match kickoff.</h3>-->
            </div>
        </div>
        
        
        
        
        
        
        <div class="row mt-5 mb-5 text-center">
            <div class="col">
                <form id="date-form" action="#" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault(); myUrlDate()">
                    <!--<input type="hidden" name="_method" value="POST">-->
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <label for="dateChecker">
                        <svg class="mr-2" style="fill:#5c5c5c; height:1.5rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M112 304h224c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V160h352v298z"/></svg>
                        <input type="date" value="{{$date}}" name="dateChecker" style="color: #5c5c5c; width: 7.3rem" id="dateChecker" class="dateselect" required>
                    </label>
                    <div class="text-center">
                        <input type="submit" class="text-white bg-dark p-1 px-2" value="Check Results">
                    </div>
                </form>
            </div>
        </div>
        <style>
            #dateChecker {
                background-color: transparent;
                border: none;
                border-bottom: 1PX solid #5c5c5c;
                border-radius: 0;
                outline: none;
                font-size: 1rem;
            }
        </style>
        
        
        
        
        
        

        {{-- @if (URL::current() == route('home'))
            <div class="row mt-5">
                <div class="col">
                    <h2 class="mx-auto text-center font-weight-bolder">Next prediction <span class="text-danger">may</span> be</h2>
                    <h2 class="mx-auto text-center font-weight-bolder">available in</h2>
                </div>
            </div>
    
            <div class="row mt-3">
                <div class="col text-center">
                    <span class="bg-danger mx-auto text-white h2 p-3" style="font-family: motikbetTimer; width:8rem; display: inline-block; overflow: hidden;">
                        <span class="" id="timerM"></span>:<span class="" id="timerS"></span>
                    </span>
                </div>
            </div>
        @endif --}}

        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">
                    Winning Predictions
                    {{-- <small>
                        <sup class="badge badge-pill badge-success small">95%</sup>
                    </small> --}}
                </h3>
                <table class="mx-auto table-light w-100">
                    <thead class="bg-primary text-white text-center mx-auto">
                        <tr style="font-size: 1rem">
                            <th class="d-none d-lg-table-cell p-3">S/N</th>
                            <th>Time</th>
                            <th class="d-none d-lg-table-cell">Country</th>
                            <th class="d-none d-lg-table-cell">League</th>
                            <th>Match</th>
                            <th>Prediction</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $winnings as $index => $winning)
                            <tr class="mb-5">
                                <td class="text-center d-none d-lg-table-cell">{{ $index+1 }}</td>
                                <td class="text-center">
                                    <div>
                                        <img src="https://www.countryflags.io/{{$winning->countryCode}}/flat/16.png" class="d-block d-md-none mx-auto" width="16" height="12">
                                    </div>
                                    {{ substr($winning->match_time, 0, 5) }}
                                </td>
                                <td class="text-center d-none d-lg-table-cell">{{ $winning->country }}</td>
                                <td class="text-center d-none d-lg-table-cell">{{ $winning->league }}</td>
                                <td class="text-center">
                                    <div>
                                        {{ $winning->teams }} 
                                    </div>
                                </td>
                                <td class="text-center">{{ $winning->winning }}</td>
                                <td class="text-center">{{ $winning->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <small class="small">*Note: This is the best for rollover with the duration of two weeks.</small> --}}
            </div>
        </div>
        
        
        
        
        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">
                    Over Predictions
                    {{-- <small>
                        <sup class="badge badge-pill badge-warning small">80%</sup>
                    </small> --}}
                </h3>
                <table class="mx-auto table-light w-100">
                    <thead class="bg-primary text-white text-center mx-auto">
                        <tr style="font-size: 1rem">
                            <th class="d-none d-lg-table-cell p-3">S/N</th>
                            <th>Time</th>
                            <th class="d-none d-lg-table-cell">Country</th>
                            <th class="d-none d-lg-table-cell">League</th>
                            <th>Match</th>
                            <th>Prediction</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $overs as $index => $over)
                            <tr class="mb-5">
                                <td class="text-center d-none d-lg-table-cell">{{ $index+1 }}</td>
                                <td class="text-center">
                                    <div>
                                        <img src="https://www.countryflags.io/{{$over->countryCode}}/flat/16.png" class="d-block d-md-none mx-auto" width="16" height="12">
                                    </div>
                                    {{ substr($over->match_time, 0, 5) }}
                                </td>
                                <td class="text-center d-none d-lg-table-cell">{{ $over->country }}</td>
                                <td class="text-center d-none d-lg-table-cell">{{ $over->league }}</td>
                                <td class="text-center">
                                    <div>
                                        {{ $over->teams }} 
                                        {{-- {{ $over->away_team }} --}}
                                    </div>
                                </td>
                                <td class="text-center">{!! $over->over !!}</td>
                                <td class="text-center">{{ $over->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <small class="small">*Note: This is good for stakers with large amount.</small> --}}
            </div>
        </div>
        
        
        
        
        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">
                    BTTS Predictions
                    {{-- <small>
                        <sup class="badge badge-pill badge-warning small">80%</sup>
                    </small> --}}
                </h3>
                <table class="mx-auto table-light w-100">
                    <thead class="bg-primary text-white text-center mx-auto">
                        <tr style="font-size: 1rem">
                            <th class="d-none d-lg-table-cell p-3">S/N</th>
                            <th>Time</th>
                            <th class="d-none d-lg-table-cell">Country</th>
                            <th class="d-none d-lg-table-cell">League</th>
                            <th>Match</th>
                            <th>Prediction</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $bttss as $index => $btts)
                            <tr>
                                <td class="text-center d-none d-lg-table-cell">{{ $index+1 }}</td>
                                <td class="text-center">
                                    <div>
                                        <img src="https://www.countryflags.io/{{$btts->countryCode}}/flat/16.png" class="d-block d-md-none mx-auto" width="16" height="12">
                                    </div>
                                    {{ substr($btts->match_time, 0, 5) }}
                                </td>
                                <td class="text-center d-none d-lg-table-cell">{{ $btts->country }}</td>
                                <td class="text-center d-none d-lg-table-cell">{{ $btts->league }}</td>
                                <td class="text-center">
                                    <div>
                                        {{ $btts->teams }} 
                                    </div>
                                </td>
                                <td class="text-center">{!! $btts->btts !!}</td>
                                <td class="text-center">{{ $btts->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <small class="small">*Note: This is good for stakers with large amount.</small> --}}
            </div>
        </div>

        <br><br><br><br> <br>

        {{-- <div class="row">
            <div class="col">
                <p class="w-75 text-center mx-auto" style="font-size: 1rem">
                    We want to provide more match predictions and also improve the accuracy of this website, 
                    for this we need opta stats which is expensive. To support us in making this a reality,
                    make your donation below.
                </p>
                <div class="text-center">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Donate</a>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br> --}}
    </div>





    <footer class="footer p-4 mb-n2" style="background-color: #25352c;">
        <div class="container-fluid text-white text-center">
            <p style="font-size: 0.8rem">&copy; {{date('Y')}} MOTIKBET.COM</p>
            <p style="font-size: 0.8rem">Terms and Conditions / Privacy and Cookie Policy</p>
            <p style="font-size: 0.8rem">Email: info@motikbet.com</p>
            <p class="text-muted">Motikbet supports and promotes responsible gambling. Please Gamble Responsibly.</p>
            <p style="font-size: 0.8rem">
                <a href="https://www.begambleaware.org/" class="text-white h4" rel="nofollow" target="_blank" style="text-decoration:none"> BeGambleAware.org <span class="p-2" style="border-radius: 50%; background-color: red">18+ </span>
                </a>
            </p>
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
            /*src: url('/brand/Amillina.ttf');*/
            /*src: url('/fonts/digital-7mi.ttf');*/
            /*src: url('/fonts/DIGITALDREAMFAT.ttf');*/
            /*src: url('/fonts/timer.ttf');*/
        }
    </style>
    

    <script>
    
        if ({!!URL::current() == route('home')!!}){
            
            var CurrentMin = new Date().getMinutes();
            var CurrentSec = new Date().getSeconds();
            var DisplaySec = 60 - CurrentSec;
            var DisplayMin, SingleSec, SingleMin;
    
            if (CurrentMin < 30) {
                DisplayMin = 29 - CurrentMin;
            } else {
                DisplayMin = 59 - CurrentMin;
            }
    
            setInterval(function(){
                if (DisplaySec !== 0) {
                    DisplaySec--;
                    SingleSec = DisplaySec < 10? "0"+DisplaySec : DisplaySec; 
                    document.getElementById("timerS").innerHTML = SingleSec;          
                } else {
                    DisplaySec = 59;
                    document.getElementById("timerS").innerHTML = DisplaySec;
                }
    
                if (DisplaySec == 59) {
                    DisplayMin--;
                    SingleMin = DisplayMin < 10? "0"+DisplayMin : DisplayMin; 
                    document.getElementById("timerM").innerHTML = SingleMin;                          
                } else {
                    SingleMin = DisplayMin < 10? "0"+DisplayMin : DisplayMin; 
                    document.getElementById("timerM").innerHTML = SingleMin;                          
                }
    
                if (DisplayMin == -1) {
                    DisplayMin = 29;
                    document.getElementById("timerM").innerHTML = DisplayMin;
                }
                
                
                
                if (CurrentMin == 3 && DisplaySec == 0){
                    location.reload(true);
                }
                
                
    
            }, 1000);
        }




    </script>
    <script>
        function myUrlDate() {
            
            var dateForm = document.forms[0];
            var selectElement = dateForm.querySelector('input[name="dateChecker"]'); 
            var selectedValue = selectElement.value;
            
            var selectValueArray = selectedValue.split('-');
            var selectedValue = selectValueArray[1] + '-' + selectValueArray[2] + '-' + selectValueArray[0];
            
            var url = '{{ route("checker", ["date" => ":date"]) }}';
            url = url.replace(':date', selectedValue);
            
            dateForm.action = url;

            dateForm.submit();
        }
    </script>
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




