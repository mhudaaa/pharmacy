<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Forecast;
use App\Model\Medicine;
use App\Model\Order;
use App\Model\Player;
use App\Model\Stock;

class PharmacyController extends Controller{

    public function home(){
        return view('homepage');
    }

    public function play(){
        return view('play-game');
    }

    public function orders(){
        $paracetamol    = Forecast::where('id_medicine', '=', '1')->get();
        $neuralgin      = Forecast::where('id_medicine', '=', '2')->get();
        $antalgin       = Forecast::where('id_medicine', '=', '3')->get();
        $bodrex         = Forecast::where('id_medicine', '=', '4')->get();
        $komix          = Forecast::where('id_medicine', '=', '5')->get();
        return view('orders', compact('paracetamol', 'antalgin', 'bodrex', 'neuralgin', 'komix'));
    }

    public function gameover(){
        return view('game-over');
    }



    
    public function start(){
        $metodeAwal = rand(1, 3);

        $paracetamol    = Permintaan::where('id_medicine', '=', '1')->get();
        $antalgin       = Permintaan::where('id_medicine', '=', '2')->get();
        $bodrex         = Permintaan::where('id_medicine', '=', '3')->get();
        $diapet         = Permintaan::where('id_medicine', '=', '4')->get();
        $komix          = Permintaan::where('id_medicine', '=', '5')->get();
        
        return view('orders', compact('metodeAwal', 'paracetamol', 'antalgin', 'bodrex', 'diapet', 'komix'));
    }
    
    public function insert(Request $request){

        $jmlObat = [$request->pr, $request->ag, $request->bd, $request->dp, $request->kx];


        $i=0;
        While ($i<= 4){
            $permintaan = new Permintaan();
            $permintaan->id_medicine = $i+1;
            $permintaan->jumlah = $jmlObat[$i];
            $permintaan->save();
            $i++;
        }
        return redirect('/play');
    }

}