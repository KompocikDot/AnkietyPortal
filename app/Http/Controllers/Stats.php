<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Stats extends Controller
{
    public function ReturnAllStatsPage() {
        $ifAdmin = Auth::user()->id == 1;
        $ankiety = DB::table('ankieties')->select(['id', 'nazwa_ankiety'])->get();
        return view('pages.stats', compact('ifAdmin', 'ankiety'));
    }

    public function ReturnStatsPage(int $id) {
        $ifAdmin = Auth::user()->id == 1;
        $res = DB::table('odpowiedzis')->select(['odp1', 'odp2', 'odp3', 'odp4', 'odp5', 'odp6'])->where("ankieta_id", "=", $id)->get();
        
        $p1_a = 0;
        $p2_a = 0;
        $p3_a = 0;
        $p4_a = 0;
        $p5_a = 0;
        $p6_a = 0;

        $p1_b = 0;
        $p2_b = 0;
        $p3_b = 0;
        $p4_b = 0;
        $p5_b = 0;
        $p6_b = 0;

        $p1_c = 0;
        $p2_c = 0;
        $p3_c = 0;
        $p4_c = 0;
        $p5_c = 0;
        $p6_c = 0;

        $p1_d = 0;
        $p2_d = 0;
        $p3_d = 0;
        $p4_d = 0;
        $p5_d = 0;
        $p6_d = 0;
        

        foreach($res as $row) {
            for($i = 1; $i <= 6; $i++) {
                $item = "odp".$i;
                switch ($row->$item) {
                    case "A":
                        ${'p'.$i."_a"}++;
                        break;
                    case "B":
                        ${'p'.$i."_b"}++;
                        break;
                    case "C":
                        ${'p'.$i."_c"}++;
                        break;  
                    case "D":
                        ${'p'.$i."_d"}++;
                        break;  
                }

            }
        }

        $counted_array = array(
            $p1_a.", ".$p1_b.", ".$p1_c.", ".$p1_d,
            $p2_a.", ".$p2_b.", ".$p2_c.", ".$p2_d,
            $p3_a.", ".$p3_b.", ".$p3_c.", ".$p3_d,
            $p4_a.", ".$p4_b.", ".$p4_c.", ".$p4_d,
            $p5_a.", ".$p5_b.", ".$p5_c.", ".$p5_d,
            $p6_a.", ".$p6_b.", ".$p6_c.", ".$p6_d,
        );

        

        return view('pages.stats_single', compact('ifAdmin', "counted_array"));
    }

}
