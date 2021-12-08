<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Winning;
use App\OverUnder;
use App\BTTS;
use App\MShot;
use App\MFoul;
use App\ShotOnTarget;
use App\Analysis;

class MotibetkPredicts extends Controller
{
    protected $todaysDate;

    public function __construct()
    {
        date_default_timezone_set("Africa/Lagos");
        $this->todaysDate = date('Y-m-d');
    }

    public function index(){
        $string = file_get_contents(public_path('countries.json'));
        $decodedJson = json_decode($string);
        $date = date('Y-m-d');
        $qDate = Carbon::today();
        // $matches = Analysis::whereDate('created_at', $qDate)->orderBy('match_time')->get();
        $matches = Analysis::whereDate('created_at', $qDate)->get();
        foreach($matches as $match){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $match->country){
                    $code = $value->code;
                }
            }
            $match->countryCode = $code;
        }
        
        $winnings = [];
        $overs = [];
        $bttss = [];
        foreach ($matches as $row => $val) {
            if (
                ($val->home_opp_str > $val->away_str)
                && ($val->home_atk > $val->away_atk)
                && ($val->home_def > $val->away_def)
                && ($val->h2h_winner > 0)
                && ($val->h2h_winner < 4)
                && ($val->home_opp_str > 1)
                && ($val->home_str >= 1.5)
                && ($val->away_atk <= 20)
                && ($val->away_opp_str < $val->home_str)
                // (($val->home_str) >= 2)
                // && ($val->away_str <= 1)
                // && ($val->home_atk >= 29)
                // && ($val->away_atk < 20)
                // && ($val->home_def > $val->away_def)
                // && ($val->h2h_winner >= 0)
                // && ($val->home_opp_str > 1)
            ) {
                if ((($val->home_atk - $val->away_atk) > 8) && ($val->home_atk > 29)) {
                    $val->winning = "1";
                    $winnings[] = $val;
                } else {
                    $val->winning = "1X";
                    $winnings[] = $val;
                }
                
                // $val->winning = "1";
                // $winnings[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                ($val->away_opp_str > $val->home_str)
                && ($val->away_atk > $val->home_atk)
                && ($val->away_def > $val->home_def)
                && ($val->h2h_winner < 0)
                && ($val->h2h_winner > -4)
                && ($val->away_opp_str > 1)
                && ($val->away_str >= 1.5)
                && ($val->home_atk <= 20)
                && ($val->home_opp_str < $val->away_str)
                // (($val->away_str) >= 1.5)
                // && ($val->home_str <= 1)
                // && ($val->away_atk >= 29)
                // && ($val->home_atk < 20)
                // && ($val->away_def > $val->home_def)
                // && ($val->h2h_winner <= 0)
                // && ($val->away_opp_str > 1)
            ) {
                if ((($val->away_atk - $val->home_atk) > 8) && ($val->away_atk > 29)) {
                    $val->winning = "2";
                    $winnings[] = $val;
                } else {
                    $val->winning = "2X";
                    $winnings[] = $val;
                }
                // $val->winning = "2";
                // $winnings[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                ($val->home_def < 7)
                &&($val->away_def < 7)
                && (($val->home_atk) >= 21)
                && (($val->away_atk) >= 21)
                && ($val->home_str > $val->away_str)
                && ($val->away_opp_str >= 1.5)
            ) {
                $val->btts = "BTTS &nbsp &nbsp 90%";
                $bttss[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_atk) > 21)
                && (($val->away_atk) > 21)
                && (($val->home_str) >= 1.3)
                && (($val->away_str) >= 1.3 && ($val->away_str) < 2)
                && (($val->home_opp_str) >= 1.3)
                && (($val->away_opp_str) >= 1.3)
            ) {
                $val->over = "Over 1.5 &nbsp &nbsp 95%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->def_add) < 16)
                && (($val->attack_add) > 49)
                && (($val->home_atk > $val->away_atk))
                && ($val->h2h_winner >= 0)
                && ($val->away_atk >= 20.5)
                && ($val->attack_diff < 24)
            ) {
                // $val->over = "1 - Over 2.5 80%";
                $val->over = "Over 2.5 &nbsp &nbsp 80%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_atk) > 21)
                && (($val->away_atk) > 21)
                && (($val->home_atk - $val->away_atk) >= 9)
                && ($val->home_str < $val->away_str)
            ) {
                // $val->over = "3 - Over 2.5 85%";
                $val->over = "Over 2.5 &nbsp &nbsp 85%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_str) >= 2.5)
                && ($val->home_atk > 30)
                && ($val->away_def < 8)
            ) {
                // $val->over = "2 - Over 2.5 90%";
                $val->over = "Over 2.5 &nbsp &nbsp 90%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_atk) > 40)
                && (($val->away_def) < 7)
            ) {
                // $val->over = "4 - Over 2.5 95%";
                $val->over = "Over 2.5 &nbsp &nbsp 95%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->attack_diff) < -10)
                && ($val->away_atk < 40)
                && ($val->home_def > 9)
                && ($val->away_def > 9)
                && ($val->country != 'Japan')
            ) {
                $val->over = "Under 3.5";
                $overs[] = $val;
            }
        }

        return view('homePage', ['date' => $date, 'winnings' => $winnings, 'overs' => $overs, 'bttss' => $bttss]);
    }
    
    public function checker(Request $request, $date){
        $str = $date;
        $exp = explode("-",$str);
        $date = $exp[2].'-'.$exp[0].'-'.$exp[1];
        
        $string = file_get_contents(public_path('countries.json'));
        $decodedJson = json_decode($string);
        // $date = date('Y-m-d');
        $qDate = Carbon::today();
        // $matches = Analysis::whereDate('created_at', $date)->orderBy('match_time')->get();
        $matches = Analysis::whereDate('created_at', $date)->get();

        foreach($matches as $match){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $match->country){
                    $code = $value->code;
                }
            }
            $match->countryCode = $code;
        }
        
        $winnings = [];
        $overs = [];
        $bttss = [];
        foreach ($matches as $row => $val) {
            if (
                ($val->home_opp_str > $val->away_str)
                && ($val->home_atk > $val->away_atk)
                && ($val->home_def > $val->away_def)
                && ($val->h2h_winner > 0)
                && ($val->h2h_winner < 4)
                && ($val->home_opp_str > 1)
                && ($val->home_str >= 1.5)
                && ($val->away_atk <= 20)
                && ($val->away_opp_str < $val->home_str)
                // (($val->home_str) >= 2)
                // && ($val->away_str <= 1)
                // && ($val->home_atk >= 29)
                // && ($val->away_atk < 20)
                // && ($val->home_def > $val->away_def)
                // && ($val->h2h_winner >= 0)
                // && ($val->home_opp_str > 1)
            ) {
                if ((($val->home_atk - $val->away_atk) > 8) && ($val->home_atk > 29)) {
                    $val->winning = "1";
                    $winnings[] = $val;
                } else {
                    $val->winning = "1X";
                    $winnings[] = $val;
                }
                
                // $val->winning = "1";
                // $winnings[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                ($val->away_opp_str > $val->home_str)
                && ($val->away_atk > $val->home_atk)
                && ($val->away_def > $val->home_def)
                && ($val->h2h_winner < 0)
                && ($val->h2h_winner > -4)
                && ($val->away_opp_str > 1)
                && ($val->away_str >= 1.5)
                && ($val->home_atk <= 20)
                && ($val->home_opp_str < $val->away_str)
                // (($val->away_str) >= 1.5)
                // && ($val->home_str <= 1)
                // && ($val->away_atk >= 29)
                // && ($val->home_atk < 20)
                // && ($val->away_def > $val->home_def)
                // && ($val->h2h_winner <= 0)
                // && ($val->away_opp_str > 1)
            ) {
                if ((($val->away_atk - $val->home_atk) > 8) && ($val->away_atk > 29)) {
                    $val->winning = "2";
                    $winnings[] = $val;
                } else {
                    $val->winning = "2X";
                    $winnings[] = $val;
                }
                // $val->winning = "2";
                // $winnings[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                ($val->home_def < 7)
                &&($val->away_def < 7)
                && (($val->home_atk) >= 21)
                && (($val->away_atk) >= 21)
                && ($val->home_str > $val->away_str)
                && ($val->away_opp_str >= 1.5)
            ) {
                $val->btts = "BTTS &nbsp 90%";
                $bttss[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_atk) > 21)
                && (($val->away_atk) > 21)
                && (($val->home_str) >= 1.3)
                && (($val->away_str) >= 1.3 && ($val->away_str) < 2)
                && (($val->home_opp_str) >= 1.3)
                && (($val->away_opp_str) >= 1.3)
            ) {
                $val->over = "Over 1.5 &nbsp 95%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->def_add) < 16)
                && (($val->attack_add) > 49)
                && (($val->home_atk > $val->away_atk))
                && ($val->h2h_winner >= 0)
                && ($val->away_atk >= 20.5)
                && ($val->attack_diff < 24)
            ) {
                // $val->over = "1 - Over 2.5 80%";
                $val->over = "Over 2.5 &nbsp 80%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_atk) > 21)
                && (($val->away_atk) > 21)
                && (($val->home_atk - $val->away_atk) >= 9)
                && ($val->home_str < $val->away_str)
            ) {
                // $val->over = "3 - Over 2.5 85%";
                $val->over = "Over 2.5 &nbsp 85%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_str) >= 2.5)
                && ($val->home_atk > 30)
                && ($val->away_def < 8)
            ) {
                // $val->over = "2 - Over 2.5 90%";
                $val->over = "Over 2.5 &nbsp 90%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->home_atk) > 40)
                && (($val->away_def) < 7)
            ) {
                // $val->over = "4 - Over 2.5 95%";
                $val->over = "Over 2.5 &nbsp 95%";
                $overs[] = $val;
            }
        }
        foreach ($matches as $row => $val) {
            if (
                (($val->attack_diff) < -10)
                && ($val->away_atk < 40)
                && ($val->home_def > 9)
                && ($val->away_def > 9)
                && ($val->country != 'Japan')
            ) {
                $val->over = "Under 3.5";
                $overs[] = $val;
            }
        }

        return view('homePage', ['date' => $date, 'winnings' => $winnings, 'overs' => $overs, 'bttss' => $bttss]);
    }

}
















