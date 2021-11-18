<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Ankieta extends Controller
{
    public function ReturnAnkieta() {
        $ifAdmin = Auth::user()->id == 1;
        return view('pages.ankiety_add', compact('ifAdmin'));
    }

    public function AddAnkieta(Request $req) {
        DB::table('ankieties')->insert([
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "nazwa_ankiety" => $req->nazwa_ankiety,

            "pytanie1" => $req->pytanie1,
            "pytanie2" => $req->pytanie2,
            "pytanie3" => $req->pytanie3,
            "pytanie4" => $req->pytanie4,
            "pytanie5" => $req->pytanie5,
            "pytanie6" => $req->pytanie6,
            
            "p1_odp" => implode("||", array($req->odp_a_1, $req->odp_b_1, $req->odp_c_1, $req->odp_d_1)),
            "p2_odp" => implode("||", array($req->odp_a_2, $req->odp_b_2, $req->odp_c_2, $req->odp_d_2)),
            "p3_odp" => implode("||", array($req->odp_a_3, $req->odp_b_3, $req->odp_c_3, $req->odp_d_3)),
            "p4_odp" => implode("||", array($req->odp_a_4, $req->odp_b_4, $req->odp_c_4, $req->odp_d_4)),
            "p5_odp" => implode("||", array($req->odp_a_5, $req->odp_b_5, $req->odp_c_5, $req->odp_d_5)),
            "p6_odp" => implode("||", array($req->odp_a_6, $req->odp_b_6, $req->odp_c_6, $req->odp_d_6)),
        ]);

        return redirect()->route('ankiety_get');
    }


    public function ReturnDashData() {
        $user = Auth::user()->id;
        $ifAdmin = $user == 1;
    
        if ($ifAdmin) { 
            return view('pages.admincontentdash', compact('ifAdmin')); // widok admina
        } else {
            $unresolved = DB::select("SELECT * FROM `ankieties` WHERE id NOT IN (SELECT DISTINCT ankieta_id from odpowiedzis where user_id = $user)");
            return view('pages.usercontentdash', compact('ifAdmin', 'unresolved')); // widok usera
        }
    }

    public function GetExactAnkieta(int $id) {
        $ifAdmin = Auth::user()->id == 1;
        $res = DB::table('ankieties')->select()->where("id", "=", $id)->first();

        return view("pages.single_ankieta", compact('ifAdmin', 'res'));
    }

    public function AddAnkietaAnswer(Request $req) {
        $ank_id = $req->ankieta_id;

        DB::table('odpowiedzis')->insert([
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "user_id" => Auth::user()->id,
            "ankieta_id" => $ank_id,
            "odp1" => $req->odp1,
            "odp2" => $req->odp2,
            "odp3" => $req->odp3,
            "odp4" => $req->odp4,
            "odp5" => $req->odp5,
            "odp6" => $req->odp6,
        ]);
        
        return redirect()->route("dashboard");
    }

    public function ReturnUserAnkieta()
    {
        $user_id = Auth::user()->id;
        $ifAdmin = $user_id == 1;
        $answers = DB::table('odpowiedzis')->select(DB::raw('DISTINCT ankieties.nazwa_ankiety, ankieties.id'))->leftJoin('ankieties', 'odpowiedzis.ankieta_id', "=", "ankieties.id")->where("odpowiedzis.user_id", "=", $user_id)->get();
        return view('pages.answers', compact('ifAdmin', 'answers'));
    }

    public function ReturnSingleUserAnkieta(int $id) {
        $user_id = Auth::user()->id;
        $ifAdmin = $user_id == 1;
        $answer = DB::table('odpowiedzis')->leftJoin('ankieties', 'ankieties.id', '=', 'odpowiedzis.ankieta_id')->where('odpowiedzis.user_id', '=', $user_id, 'and')->where('odpowiedzis.ankieta_id', '=', $id)->get();
        return view('pages.single_answer', compact('ifAdmin', 'answer'));
    }
}
