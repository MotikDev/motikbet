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
// dd($winnings);
        $overs = OverUnder::whereDate('created_at', $date)->orderBy('match_time')->get();
        $bttss = BTTS::whereDate('created_at', $date)->orderBy('match_time')->get();
        $shots = MShot::whereDate('created_at', $date)->orderBy('match_time')->get();
        $Fouls = MFoul::whereDate('created_at', $date)->orderBy('match_time')->get();
        
        
        $string = file_get_contents(asset('countries.json'));
        $decodedJson = json_decode($string);
        
       
        foreach($winnings as $winning){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $winning->country){
                    $code = $value->code;
                }
            }
            $winning->countryCode = $code;
        }
        
        foreach($overs as $over){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $over->country){
                    $code = $value->code;
                }
            }
            $over->countryCode = $code;
        }
        foreach($bttss as $btts){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $btts->country){
                    $code = $value->code;
                }
            }
            $btts->countryCode = $code;
        }
        foreach($shots as $shot){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $shot->country){
                    $code = $value->code;
                }
            }
            $shot->countryCode = $code;
        }
        foreach($Fouls as $foul){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $foul->country){
                    $code = $value->code;
                }
            }
            $foul->countryCode = $code;
        }
        
        $date = date('Y-m-d');
        return view('homePage')->with('winnings', $winnings)->with('overs', $overs)->with('bttss', $bttss)->with('shots', $shots)->with('fouls', $Fouls)->with('date', $date);
    }
    
    public function checker(Request $request, $date){
        // dd($date);
        // $date = $request->input('dateChecker');
        
        $str = $date;
        $exp = explode("-",$str);
        $date = $exp[2].'-'.$exp[0].'-'.$exp[1];
        // dd($newStr);

        
        $winnings = Winning::whereDate('created_at', $date)->orderBy('match_time')->get();
        $overs = OverUnder::whereDate('created_at', $date)->orderBy('match_time')->get();
        $bttss = BTTS::whereDate('created_at', $date)->orderBy('match_time')->get();
        $shots = MShot::whereDate('created_at', $date)->orderBy('match_time')->get();
        $Fouls = MFoul::whereDate('created_at', $date)->orderBy('match_time')->get();
        
        
        
        
        $string = file_get_contents(asset('countries.json'));
        $decodedJson = json_decode($string);
        
       
        foreach($winnings as $winning){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $winning->country){
                    $code = $value->code;
                }
            }
            $winning->countryCode = $code;
        }
        
        foreach($overs as $over){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $over->country){
                    $code = $value->code;
                }
            }
            $over->countryCode = $code;
        }
        foreach($bttss as $btts){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $btts->country){
                    $code = $value->code;
                }
            }
            $btts->countryCode = $code;
        }
        foreach($shots as $shot){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $shot->country){
                    $code = $value->code;
                }
            }
            $shot->countryCode = $code;
        }
        foreach($Fouls as $foul){
            $code = '';
            foreach($decodedJson->result as $key => $value){
                if($value->name == $foul->country){
                    $code = $value->code;
                }
            }
            $foul->countryCode = $code;
        }
        

        return view('homePage')->with('winnings', $winnings)->with('overs', $overs)->with('bttss', $bttss)->with('shots', $shots)->with('fouls', $Fouls)->with('date', $date);
    }

}
















