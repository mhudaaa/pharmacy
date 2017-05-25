<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Permintaan;

class PharmacyController extends Controller{

    public function home(){
        return view('homepage');
    }

    public function play(){
        return view('play-game');
    }

    public function orders(){
        return view('orders');
    }

    public function checkout(){
        return view('checkout');
    }

    public function gameover(){
        return view('game-over');
    }
    
    public function start(){
        $metodeAwal = rand(1, 3);

        $paracetamol    = Permintaan::where('id_obat', '=', '1')->get();
        $antalgin       = Permintaan::where('id_obat', '=', '2')->get();
        $bodrex         = Permintaan::where('id_obat', '=', '3')->get();
        $diapet         = Permintaan::where('id_obat', '=', '4')->get();
        $komix          = Permintaan::where('id_obat', '=', '5')->get();
        
        return view('orders', compact('metodeAwal', 'paracetamol', 'antalgin', 'bodrex', 'diapet', 'komix'));
    }
    
    public function insert(Request $request){

        $jmlObat = [$request->pr, $request->ag, $request->bd, $request->dp, $request->kx];


        $i=0;
        While ($i<= 4){
            $permintaan = new Permintaan();
            $permintaan->id_obat = $i+1;
            $permintaan->jumlah = $jmlObat[$i];
            $permintaan->save();
            $i++;
        }
        return redirect('/play');
    }

}