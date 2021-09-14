<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motikbet - Predictions from match lineup</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <style>
        @font-face {
            font-family: motikbetTimer;
            src: url('/fonts/timer.ttf');
        }
        @font-face {
            font-family: motikbetBrand;
            /* src: url('/brand/SWATRG.ttf'); */
            src: url('/brand/Amillina.ttf');
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-dark" style="background-color: #25352c;">
        <a class="navbar-brand ml-3" style="letter-spacing: 5px; font-family: motikbetBrand" href="#">Motikbet</a>
    </nav>
    <picture class="mt-5 img-fluid mx-auto">
        <source media="(min-width:1200px)" srcset="{{asset('images\Desktop_Hero.svg')}}" class="w-100 img-fluid mx-auto">
        <source media="(min-width:992px)" srcset="{{asset('images\Desktop_Hero.svg')}}">
        <source media="(max-width:767px)" srcset="{{asset('images\Mobile_Hero.svg')}}" class="w-100 img-fluid mx-auto">
        <source media="(min-width: 576px)" srcset="{{asset('images\Mobile_Hero.svg')}}" class="w-100 img-fluid mx-auto">
        <img src="{{asset('images\Mobile_Hero.svg')}}" alt="Motikbet.com" style="width:100%;" class="mt-5" class="w-100 img-fluid mx-auto">
    </picture>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center mx-auto w-75 mt-5 font-weight-bold">Motikbet is for people who invest big amount of money in sport betting and people with long-term strategies.</h3>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col mt-5">
                <h3>Motikbet is different from other prediction websites as we generate predictions from match lineups. That is why the algorithm generates each prediction thirty (30) minutes before the match kickoff.</h3>
            </div>
        </div>


        <div class="row mt-5 mb-5 text-center">
            <div class="col">
                <form id="date-form" action="{{ route('test') }}" method="POST">
                    {{ csrf_field() }}
                    <label for="dateChecker">
                        <svg class="mr-3" style="fill:#5c5c5c; height:2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M112 304h224c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V160h352v298z"/></svg>
                        <input type="date" name="dateChecker" style="color: #5c5c5c" id="dateChecker" class="dateselect" required>
                    </label>
                    <div class="text-center">
                        <input type="submit" class="text-white bg-dark p-2 px-3" value="Check Result">
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
                font-size: 1.5rem;
            }
        </style>
        

        <div class="row mt-5">
            <div class="col">
                <h2 class="mx-auto text-center font-weight-bolder">Next prediction may be</h2>
                <h2 class="mx-auto text-center font-weight-bolder">available in</h2>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col text-center">
                {{-- <span class="bg-danger text-white h3 py-3 pl-3" style="font-family: motikbetTimer; width:8rem; display: inline-block; overflow: hidden;"> --}}
                <span class="bg-danger mx-auto text-white h2 p-3" style="font-family: motikbetTimer; width:8rem; display: inline-block; overflow: hidden;">
                    <span class="" id="timerM"></span>:<span class="" id="timerS"></span>
                </span>
            </div>
        </div>



        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">Winning Predictions</h3>
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
                        {{-- @foreach ( $winnings as $index => $over)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $over->match_time }}</td>
                                <td>{{ $over->country }}</td>
                                <td>{{ $over->league }}</td>
                                <td>{{ $over->home_team }} Vs {{ $over->away_team }}</td>
                                <td>{{ $over->prediction }}</td>
                                <td>{{ $over->result }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">Over and Under Predictions</h3>
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
                        {{-- @foreach ( $overs as $index => $over)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $over->match_time }}</td>
                                <td>{{ $over->country }}</td>
                                <td>{{ $over->league }}</td>
                                <td>{{ $over->home_team }} Vs {{ $over->away_team }}</td>
                                <td>{{ $over->prediction }}</td>
                                <td>{{ $over->result }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">BTTS Predictions</h3>
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
                        {{-- @foreach ( $bttss as $index => $over)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $over->match_time }}</td>
                                <td>{{ $over->country }}</td>
                                <td>{{ $over->league }}</td>
                                <td>{{ $over->home_team }} Vs {{ $over->away_team }}</td>
                                <td>{{ $over->prediction }}</td>
                                <td>{{ $over->result }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">Shot Predictions</h3>
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
                        {{-- @foreach ( $shots as $index => $over)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $over->match_time }}</td>
                                <td>{{ $over->country }}</td>
                                <td>{{ $over->league }}</td>
                                <td>{{ $over->home_team }} Vs {{ $over->away_team }}</td>
                                <td>{{ $over->prediction }}</td>
                                <td>{{ $over->result }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">Foul Predictions</h3>
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
                        {{-- @foreach ( $fouls as $index => $over)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $over->match_time }}</td>
                                <td>{{ $over->country }}</td>
                                <td>{{ $over->league }}</td>
                                <td>{{ $over->home_team }} Vs {{ $over->away_team }}</td>
                                <td>{{ $over->prediction }}</td>
                                <td>{{ $over->result }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
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





    <footer class="footer p-5 mb-n2" style="background-color: #25352c;">
        <div class="container-fluid text-white text-center">
            <p style="font-size: 1.2rem">&copy; {{date('Y')}} MOTIKBET.COM</p>
            <p style="font-size: 1.2rem">Terms and Conditions / Privacy and Cookie Policy</p>
            <p style="font-size: 1.2rem">Email: info@motikbet.com</p>
        </div>
    </footer>



    <script>
        var CurrentMin = new Date().getMinutes();
        var CurrentSec = new Date().getSeconds();
        var DisplaySec = 60 - CurrentSec;
        var DisplayMin, SingleSec, SingleMin;

        if (CurrentMin < 30) {
            DisplayMin = 30 - CurrentMin;
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
                SingleSec = DisplaySec < 10? "0"+DisplaySec : DisplaySec; 
                document.getElementById("timerS").innerHTML = SingleSec;          
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

        }, 1000);

    </script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>