<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Ankieta extends Controller
{
    public function ReturnAnkieta() {
        $user = Auth::user()->id;
        $ifAdmin = $user == 1;
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

            "p1_poprawna" => $req->poprawna_1,
            "p2_poprawna" => $req->poprawna_2,
            "p3_poprawna" => $req->poprawna_3,
            "p4_poprawna" => $req->poprawna_4,
            "p5_poprawna" => $req->poprawna_5,
            "p6_poprawna" => $req->poprawna_6,
        ]);

        redirect("/ankiety");
    }


    public function ReturnDashData() {
            $user = Auth::user()->id;
            $ifAdmin = $user == 1;
        
            if ($ifAdmin) { 
                return view('pages.admincontentdash', compact('ifAdmin')); // widok admina
            } else {
                $res = "";//DB::table('ankieties')->select('id')->get();
                return view('pages.usercontentdash', compact('ifAdmin', 'res')); // widok usera
            }
        
    }
}
