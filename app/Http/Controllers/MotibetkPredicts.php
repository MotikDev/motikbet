<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Winning;
use App\OverUnder;
use App\BTTS;
use App\MShot;
use App\MFoul;

class MotibetkPredicts extends Controller
{
    protected $todaysDate;

    public function __construct()
    {
        date_default_timezone_set("Africa/Lagos");
        $this->todaysDate = date('Y-m-d');
    }

    public function index(){
        $date = Carbon::today();

        $winnings = Winning::whereDate('created_at', $date)->orderBy('match_time')->get();
        $overs = OverUnder::whereDate('created_at', date('Y-m-d'))->orderBy('match_time')->get();
        $bttss = BTTS::whereDate('created_at', date('Y-m-d'))->orderBy('match_time')->get();
        $shots = MShot::whereDate('created_at', date('Y-m-d'))->orderBy('match_time')->get();
        $Fouls = MFoul::whereDate('created_at', date('Y-m-d'))->orderBy('match_time')->get();

        return view('homePage')->with('winnings', $winnings)->with('overs', $overs)->with('bttss', $bttss)->with('shots', $shots)->with('fouls', $Fouls);
    }

}
